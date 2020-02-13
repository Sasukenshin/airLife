<?php

if (!count($_POST))
{
    exit('erreur');
}

$logfile = $rootpath."VAD/$host/autoresponse6.log";

$dateheure = date('d/m/Y H:i:s') ;
$fp=fopen($logfile, "a");
fwrite($fp, "-------------------------------------\n");
fwrite($fp, "$dateheure\n");

foreach ($_POST as $key => $value) {
    fwrite($fp, "$key => $value\n");
}

$ipn = new PaypalIPN();
$verified = $ipn->verifyIPN();

$nom='nomFR';
fwrite($fp, "Avant verified\n");
if ($verified)
{
    $facture = $DB_site->query_first("SELECT * FROM facture WHERE factureid = '".addslashes($_POST[item_number])."'");
    if ($_POST[payment_status] == "Completed"){
        if ($_POST[receiver_email] == $params[emailComptePaypal]){
            if ($_POST[mc_currency] == "EUR"){
                if ($facture[factureid] == $_POST[item_number]){
                    if ($facture[etatid]==0) {
                        $total_facture = number_format($facture[montanttotal_ttc], 2, ".", "");
                        if ($total_facture == $_POST[mc_gross]) {
                            validerFacture($DB_site, $facture[factureid], 6);
                            avertirClient($DB_site, $facture[factureid]);
                        }else{
                            fwrite($fp, "Total facture pas egal au mc_gross total facture = $total_facture et mc_gross = $_POST[mc_gross]\n");
                        }
                    }else{
                        fwrite($fp, "etatid de la facture pas egal à 0 : etatid = $facture[etatid]\n");
                    }
                }else{
                    fwrite($fp, "Factureid pas égal à item_number : factureid = $facture[factureid] et item_number = $_POST[item_number]\n");
                }
            }else{
                fwrite($fp, "Devise pas egal à EUR : Devise = $_POST[mc_currency]\n");
            }
        }else{
            fwrite($fp, "Receiver_mail pas egat au mail du compte paypal : receiver = $_POST[receiver_email] et mail compte = $params[emailComptePaypal]\n");
        }
    }
    else {
        fwrite($fp, "payment status pas egal à Completed : payment_status = $_POST[payment_status]\n");
    }
}
else
{
    fwrite($fp, "res pas egal a verified\n");
}

fwrite($fp, "-------------------------------------\n\n\n");
fclose ($fp);

//----------------------------------------------------------------------------------------------
// PaypalIPN
//----------------------------------------------------------------------------------------------

class PaypalIPN
{
    /* @var bool Indicates if the sandbox endpoint is used. /
    private $use_sandbox = false;
    /* @var bool Indicates if the local certificates are used. /
    private $use_local_certs = true;

    /* Production Postback URL /
    const VERIFY_URI = 'https://ipnpb.paypal.com/cgi-bin/webscr';
    /* Sandbox Postback URL /
    const SANDBOX_VERIFY_URI = 'https://ipnpb.sandbox.paypal.com/cgi-bin/webscr';

    /* Response from PayPal indicating validation was successful /
    const VALID = 'VERIFIED';
    /* Response from PayPal indicating validation failed /
    const INVALID = 'INVALID';

    /**
     * Sets the IPN verification to sandbox mode (for use when testing,
     * should not be enabled in production).
     * @return void
     */
    public function useSandbox()
    {
        $this->use_sandbox = true;
    }

    /**
     * Sets curl to use php curl's built in certs (may be required in some
     * environments).
     * @return void
     */
    public function usePHPCerts()
    {
        $this->use_local_certs = false;
    }

    /**
     * Determine endpoint to post the verification data to.
     *
     * @return string
     */
    public function getPaypalUri()
    {
        if ($this->use_sandbox) {
            return self::SANDBOX_VERIFY_URI;
        } else {
            return self::VERIFY_URI;
        }
    }

    /**
     * Verification Function
     * Sends the incoming post data back to PayPal using the cURL library.
     *
     * @return bool
     * @throws Exception
     */
    public function verifyIPN()
    {
        if ( ! count($_POST)) {
            exit();
        }

        $raw_post_data = file_get_contents('php://input');
        $raw_post_array = explode('&', $raw_post_data);
        $myPost = array();
        foreach ($raw_post_array as $keyval) {
            $keyval = explode('=', $keyval);
            if (count($keyval) == 2) {
                // Since we do not want the plus in the datetime string to be encoded to a space, we manually encode it.
                if ($keyval[0] === 'payment_date') {
                    if (substr_count($keyval[1], '+') === 1) {
                        $keyval[1] = str_replace('+', '%2B', $keyval[1]);
                    }
                }
                $myPost[$keyval[0]] = urldecode($keyval[1]);
            }
        }

        // Build the body of the verification post request, adding the _notify-validate command.
        $req = 'cmd=_notify-validate';
        $get_magic_quotes_exists = false;
        if (function_exists('get_magic_quotes_gpc')) {
            $get_magic_quotes_exists = true;
        }
        foreach ($myPost as $key => $value) {
            if ($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
                $value = urlencode(stripslashes($value));
            } else {
                $value = urlencode($value);
            }
            $req .= "&$key=$value";
        }

        // Post the data back to PayPal, using curl. Throw exceptions if errors occur.
        $ch = curl_init($this->getPaypalUri());
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        curl_setopt($ch, CURLOPT_SSLVERSION, 6);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

        // This is often required if the server is missing a global cert bundle, or is using an outdated one.
        if ($this->use_local_certs) {
            curl_setopt($ch, CURLOPT_CAINFO, _DIR_ . "/cert/cacert.pem");
        }
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'User-Agent: PHP-IPN-Verification-Script',
            'Connection: Close',
        ));
        $res = curl_exec($ch);
        if ( ! ($res)) {
            $errno = curl_errno($ch);
            $errstr = curl_error($ch);
            curl_close($ch);
            exit();
        }

        $info = curl_getinfo($ch);
        $http_code = $info['http_code'];
        if ($http_code != 200) {
            exit();
        }

        curl_close($ch);

        // Check if PayPal verifies the IPN data, and if so, return true.
        if ($res == self::VALID) {
            return true;
        } else {
            return false;
        }
    }
}

//----------------------------------------------------------------------------------------------

?>
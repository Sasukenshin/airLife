<?PHP
function sendMessage(){

    $content = array(
        "en" => 'Testing Message'
    );

    $fields = array(
        'app_id' => "b0b15de8-0982-4a93-afc8-ad4c7c0e109f",



        'data' => array("foo" => "bar"),
        'large_icon' =>"ic_launcher_round.png",
        'contents' => $content,
        'include_player_ids'=> array('57cb7b02-4e35-4e51-98c8-4570b9d64dcf')

    );

    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
        'Authorization: Basic NTYzMDhiNjAtYmI3Yi00ZWE3LTliMTctYTgwNThhNGFjMDNm'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

$response = sendMessage();
$return["allresponses"] = $response;
$return = json_encode( $return);
print("\n\nJSON received:\n");
print($return);
print("\n");
?>

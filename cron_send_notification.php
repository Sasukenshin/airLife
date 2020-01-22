<?PHP
function sendMessage($content, $playerId, $data = array("test"=>"ok","caca" => "pipi"),$icone=""){
    if(empty($content) || $content == null){
        return "Message nécéssaire à l'envoie d'une notification";
    } else if(empty($playerId) || $playerId == null) {
        return "Player ID nécéssaire à l'envoie d'une notification";
    }
    print_r(json_encode($data));
    echo "<br><br>";
    $fields = array(
        'app_id' => "b0b15de8-0982-4a93-afc8-ad4c7c0e109f",

        'large_icon' => $icone,
        'contents' => $content,
        'include_player_ids'=> $playerId

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
$ID=array('6c0d3b43-30d1-4781-9a4d-029954bde1e8');
$message=array('en' => 'Hi i\'m fine and u ?', 'fr'=> "Salut je vais bien et toi ?");
$response = sendMessage($message, $ID);
$return["allresponses"] = $response;
$return = json_encode( $return);
print("\n\nJSON received:\n");
print($return);
print("\n");


?>

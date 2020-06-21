<?php

//include 'wfstats.php';

$confirmation_token = 'd7124419';
$token = "a8667c35957227e39b2a801c36eca359e08cf15325e6f294dacd5205527398c0ae62b0cb0f9305042ab93";

$data = json_decode(file_get_contents('php://input'));

function vk_msg_send($peer_id,$text){
	$request_params = array(
		'message' => $text,
		'peer_id' => $peer_id,
		'group_id' => "194757158",
		'random_id' => "0",
		'access_token' => "a8667c35957227e39b2a801c36eca359e08cf15325e6f294dacd5205527398c0ae62b0cb0f9305042ab93",
		'v' => '5.110'
	);
	$get_params = http_build_query($request_params);
	file_get_contents('https://api.vk.com/method/messages.send?'. $get_params);
}

function send_query($method, $params){
    $get_params = http_build_query($params);
    $return = json_decode(file_get_contents('https://api.vk.com/method/'.$method.'?'.$get_params));
    return $return;
}

function GetUploadServer($peer_id) {
    $request_params = array(
        'peer_id' => $peer_id,
        'v' => '5.110',
        'access_token' => 'a8667c35957227e39b2a801c36eca359e08cf15325e6f294dacd5205527398c0ae62b0cb0f9305042ab93'
    );
    return send_query('photos.getMessagesUploadServer', $request_params);
}

function uploadToServer($url, $file_name) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, array('file' => new CURLfile($file_name)));
    $json = curl_exec($curl);
    curl_close($curl);
    return json_decode($json, true);
}

function SaveMessagesPhoto($photo, $server, $hash) {
    $request_params = array(
        'photo' => $photo,
        'server' => $server,
        'hash' => $hash,
        'v' => '5.110',
        'access_token' => 'a8667c35957227e39b2a801c36eca359e08cf15325e6f294dacd5205527398c0ae62b0cb0f9305042ab93'
    );
    return send_query('photos.saveMessagesPhoto', $request_params);
}

function uploadPhoto($user_id, $file_name) {
    $upload_server_response = GetUploadServer($user_id);
    $upload_response = uploadToServer($upload_server_response->response->upload_url, $file_name);
    $save_response = SaveMessagesPhoto($upload_response['photo'], $upload_response['server'], $upload_response['hash']);
    return $save_response;
}

function sendAttachment($peer_id, $text, $path) {
	$photo = uploadPhoto($peer_id, $path);
    $request_params = array(
        'random_id' => mt_rand(0, 999999),
        'message' => $text,
        'peer_id' => $peer_id,
        'group_id' => '194757158',
        'attachment' => 'photo'.$photo->response[0]->owner_id.'_'.$photo->response[0]->id,
        'access_token' => 'a8667c35957227e39b2a801c36eca359e08cf15325e6f294dacd5205527398c0ae62b0cb0f9305042ab93',
        'v' => '5.110'
    );
    send_query("messages.send", $request_params);
}



switch ($data->type) {

	case 'confirmation':
		echo $confirmation_token;
	break;

	case 'message_new':
		$message_text = $data->object->message->text;
		$chat_id = $data->object->message->peer_id;

		$bstr = explode(" ", $message_text);

		include "weather.php";

		$str = mb_strtolower($message_text, 'UTF-8'); //$bstr[0]

		$strarr = explode(" ", $message_text);
		$arrslc = array_slice($strarr, 1);
		$arrslcimp = implode(" ", $arrslc);

		include 'commands.php';

		echo 'ok';
	break;
}
?>

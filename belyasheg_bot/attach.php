<?

	function send_query($method, $params){
        $get_params = http_build_query($params);
        $return = json_decode(file_get_contents('https://api.vk.com/method/'.$method.'?'.$get_params));
        return $return;
	}

	function sendAttachment($peer_id, $text, $path) {
		$photo = uploadPhoto($peer_id, $path);
        $request_params = array(
            'random_id' => mt_rand(0, 999999),
            'message' => $text,
            'peer_id' => $peer_id,
            'group_id' => '194757158',
            'attachment' => 'photo'.$photo->response[0]->owner_id.'_'.$photo->response[0]->id,
            'access_token' => '697fbf0531e515000313af2c6d64d40ba9bb96f1fe913417bc8dcf2c0ff464d997987e845b4e98fdbefac', 
            'v' => '5.103'
        );
        send_query("messages.send", $request_params);
	}

	function GetUploadServer($peer_id) {
        $request_params = array(
            'peer_id' => $peer_id,
            'v' => '5.103',
            'access_token' => '697fbf0531e515000313af2c6d64d40ba9bb96f1fe913417bc8dcf2c0ff464d997987e845b4e98fdbefac'
        );
        return send_query('photos.getMessagesUploadServer', $request_params);
    }

    function SaveMessagesPhoto($photo, $server, $hash) {
        $request_params = array(
            'photo' => $photo,
            'server' => $server,
            'hash' => $hash,
            'v' => '5.103',
            'access_token' => '697fbf0531e515000313af2c6d64d40ba9bb96f1fe913417bc8dcf2c0ff464d997987e845b4e98fdbefac'
        );
        return send_query('photos.saveMessagesPhoto', $request_params);
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

    function uploadPhoto($user_id, $file_name) {
        $upload_server_response = GetUploadServer($user_id);
        $upload_response = uploadToServer($upload_server_response->response->upload_url, $file_name);
        $save_response = SaveMessagesPhoto($upload_response['photo'], $upload_response['server'], $upload_response['hash']);
        return $save_response;
    }
?>
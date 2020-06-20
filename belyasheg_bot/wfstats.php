<?php
$url = "https://api.warframestat.us/pc/arbitration";

$options = array(
	"platform" => "pc",
	"lang" => "en",
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

$response = curl_exec($ch);
$data = json_decode($response);
curl_close($ch);

$arb = $data->enemy;

$urlbaro = "https://api.warframestat.us/pc/voidTrader";

/*$options = array(
	"platform" => "pc",
	"lang" => "en",
);*/

$chbaro = curl_init();
curl_setopt($chbaro, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($chbaro, CURLOPT_URL, $urlbaro.'?'.http_build_query($options));

$responsebaro = curl_exec($chbaro);
$databaro = json_decode($responsebaro);
curl_close($chbaro);

$baro = $databaro->activation;

?>
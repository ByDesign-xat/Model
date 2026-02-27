<?php
header('Content-Type: application/json');

$url = $_GET['url'];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);

if ($response === false) {
    echo json_encode(["curl_error" => curl_error($ch)]);
} else {
    echo $response;
}

curl_close($ch);
?>

<?php
header('Content-Type: application/json');

if (!isset($_GET['url'])) {
    echo json_encode(["error" => "No URL provided"]);
    exit;
}

$url = $_GET['url'];

// Permite doar http și https
$parsed = parse_url($url);

if (!$parsed || !in_array($parsed['scheme'], ['http','https'])) {
    echo json_encode(["error" => "Invalid URL"]);
    exit;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

$response = curl_exec($ch);

if ($response === false) {
    echo json_encode(["error" => curl_error($ch)]);
} else {
    echo $response;
}

curl_close($ch);
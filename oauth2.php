<?php
require 'settings.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("HTTP/1.1 405 Method Not Allowed");
    include('405.html');
    exit();
}
if ($_POST["credential"] == '') {
    header("HTTP/1.1 401 Unauthorized");
    include('401.html');
    exit();
}

$client = new Google_Client(['client_id' => $CLIENT_ID]);
$payload = $client->verifyIdToken($_POST["credential"]);
if ($payload) {
    $userid = $payload['sub'];
    // If request specified a G Suite domain:
    $domain = $payload['hd'];
    echo "success";
    echo $domain;
} else {
    echo "failure";
}
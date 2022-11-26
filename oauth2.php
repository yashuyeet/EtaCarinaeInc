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
if ($payload && $payload['hd'] == 'etacarinaeinc.org') {
    $userid = $payload['sub'];
    try {
        $auth->admin()->logInAsUserByEmail($payload['email']);
    }
    catch (\Delight\Auth\InvalidEmailException $e) {
        $auth->register($payload['email'], strval(rand(0, 2147483647)), $payload['name']);
        $auth->admin()->logInAsUserByEmail($payload['email']);
    }
    catch (\Delight\Auth\EmailNotVerifiedException $e) {
        header("HTTP/1.1 500 Internal Server Error");
        include('500.html');
        exit();
    }
    $exec = $db->prepare("UPDATE users SET username = ?, avatar_url = ? WHERE id = ?;");
    $exec->execute([$payload['name'], $payload['picture'], $auth->getUserId()]);
    $_SESSION[$auth::SESSION_FIELD_USERNAME] = $payload['name'];
    header('Location: ./');
} else {
    header("HTTP/1.1 401 Unauthorized");
    include('401.html');
    exit();
}
<?php
require __DIR__ . '/vendor/autoload.php';

$db = new \PDO('mysql:dbname=etacarinaeinc;host=localhost;charset=utf8mb4', 'etacarinaeinc', 'Sh4n3Hb9a/ZZih9H');
$auth = new \Delight\Auth\Auth($db);

$CLIENT_ID = "75171982322-btgi81h91o2f2t3a2tb9d827ivi60h87.apps.googleusercontent.com";
$CLIENT_SECRET = "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";
$REDIRECT_URI = "https://server.hhls.xyz/EtaCarinaeInc/oauth2.php";
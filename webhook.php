<?php

$secret = "mysecret123"; // نفس اللي هنحطه في GitHub

$content = file_get_contents("php://input");
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'] ?? '';

$hash = 'sha1=' . hash_hmac('sha1', $content, $secret);

if (!hash_equals($hash, $signature)) {
    http_response_code(403);
    exit('Invalid signature');
}

// شغل deploy
exec('/home3/ahmadothman/deploy.sh 2>&1');

echo "Deployed";
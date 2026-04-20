<?php

if (empty($signature)) {
    echo "Webhook working";
    exit;
}

// شغل deploy
exec('/home3/ahmadothman/deploy.sh 2>&1');

echo "Deployed";
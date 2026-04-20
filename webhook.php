<?php

$output = [];
exec('/home3/ahmadothman/deploy.sh 2>&1', $output);

echo "<pre>";
print_r($output);
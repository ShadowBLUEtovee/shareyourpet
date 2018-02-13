<?php

$url = 'http://shareyourpet.api.serverbox.local';
$user_get_nonce = $url.'/cdyj98bdk5t1p87z/get_nonce/?controller=user&method=register';

$test = file_get_contents($user_get_nonce);
// $nonce = json_decode($nonce);

// echo print_r($nonce,1);

echo $test;
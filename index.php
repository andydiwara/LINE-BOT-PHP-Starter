<?php
$access_token = '/SCsycS09R2V1mWSUnNKmupMca498c8saeYCO/1uTrep9Hw7TCCpM9CoJI0ahEw7P4HlfPMNKdKiN0WoXooPLi6ffTjlXhMddxPheADN2OgYdqVdr6UntJNBHnGP4TEVn+YhFEvd30AA8f4vQDeKigdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

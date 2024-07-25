<?php

$cl = curl_init();

curl_setopt_array($cl, [
    CURLOPT_URL => "https://api.github.com/gists/25d1feabbb968cb8c6237039c2f2d33d",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "kalpesh172000"
]);

$response = curl_exec($cl);

curl_close($cl);

$data = json_decode($response, true);

print_r($data);

// foreach ($data as $gists) {
//     echo $gists['id'] . " : " . $gists['description'] . "\n";
// }

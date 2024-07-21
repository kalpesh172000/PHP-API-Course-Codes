<?php
$cl = curl_init();

// curl_setopt($cl, CURLOPT_URL, "https://randomuser.me/api");

// curl_setopt($cl, CURLOPT_RETURNTRANSFER, 1); //it can be true or 1
curl_setopt_array($cl,[
    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => true,
]);
$response = curl_exec($cl);
$info = curl_getinfo($cl, CURLINFO_HTTP_CODE);
echo $response . "\n" . $info . "\n";

curl_close($cl);

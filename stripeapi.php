<?php

$cl = curl_init();

$key = "your stripe key";

$data = [
    "name" => "alice",
    "email" => "alice@example.com"
];


curl_setopt_array($cl, [
    CURLOPT_URL => "https://api.stripe.com/v1/customers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $key,
    CURLOPT_POSTFIELDS => http_build_query($data)
]);

$response = curl_exec($cl);

curl_close($cl);

$data = json_decode($response, true);

print_r($data);

// foreach ($data as $gists) {
//     echo $gists['id'] . " : " . $gists['description'] . "\n";
// }

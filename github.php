<?php

$cl = curl_init();

$headers = [
    "Authorization: Bearer your-access-token",
    "X-GitHub-Api-Version: 2022-11-28",
    //"User-Agent: kalpesh172000"
];

curl_setopt_array($cl,[
    CURLOPT_URL => "https://api.github.com/user/starred/kalpesh172000/saras",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "kalpesh172000",
    CURLOPT_CUSTOMREQUEST => "PUT",
]);

$response = curl_exec($cl);

$info = curl_getinfo($cl, CURLINFO_HTTP_CODE);

if ($response === false) {
    $error = curl_error($cl);
    echo "Curl error: " . $error . "\n";
} else {
    echo "HTTP Status Code: " . $info . "\n";
    echo "Response: " . $response . "\n";
}

curl_close($cl);

<?php

$cl = curl_init();

$headers = [
    "Authorization: Bearer your-access-token",
    "X-GitHub-Api-Version: 2022-11-28",
    //"User-Agent: kalpesh172000"
];

$payload = json_encode([
    "name" => "PHP API Course Codes",
    "description" => "this repo is created using php code that implements the github repo api" 
]);

curl_setopt_array($cl,[
    CURLOPT_URL => "https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "kalpesh172000",
    // CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POST => true, //does the same thing as setting the customrequest to "POST"
    CURLOPT_POSTFIELDS => $payload
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

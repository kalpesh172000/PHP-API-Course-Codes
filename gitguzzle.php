<?php

require __DIR__ . "/vendor/autoload.php";

$client = new GuzzleHttp\Client;

$response = $client->request("GET", "https://api.github.com/user/repos", [
    "headers" => [
        "Authorization" => "token your_token",
        "User-Agent" => "kalpesh172000"
    ]
]);

echo $response->getStatusCode() . "\n";

echo $response->getHeader("Content-Type")[0] . "\n";

echo substr($response->getBody(), 0, 200) . "\n";

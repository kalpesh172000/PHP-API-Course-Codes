<?php
$cl = curl_init();

$headers = [ "Authorization: Client-ID your-access-token", ];

$response_headers = [];

$header_function = function($cl, $header) use (&$response_headers){
    $len = strlen($header);
    $parts = explode(":", $header, 2);
    if(count($parts) < 2){
        return $len;
    }
    $response_headers[$parts[0]] = trim($parts[1]);
    return $len;
};

curl_setopt_array($cl,[
    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_HEADERFUNCTION => $header_function
]);

$response = curl_exec($cl);
$info = curl_getinfo($cl, CURLINFO_HTTP_CODE);

if ($response === false) {
    $error = curl_error($cl);
    echo "Curl error: " . $error . "\n";
} else {
    // echo "HTTP Status Code: " . $info . "\n";
    // echo "Response: " . $response . "\n";
    echo "Response Headers: \n";
    print_r($response_headers);
}

curl_close($cl);
?>

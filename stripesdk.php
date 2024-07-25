<?php

// $cl = curl_init();

$key = "your stripe key";

$data = [
    "name" => "ron",
    "email" => "ron@example.com"
];


// curl_setopt_array($cl, [
//     CURLOPT_URL => "https://api.stripe.com/v1/customers",
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_USERPWD => $key,
//     CURLOPT_POSTFIELDS => http_build_query($data)
// ]);

// $response = curl_exec($cl);

// curl_close($cl);

// $data = json_decode($response, true);

// print_r($data);

require __DIR__ . "/vendor/autoload.php";

$stripe = new \Stripe\StripeClient($key);

$customer = $stripe->customers->create($data);

echo $customer;
echo "\n";


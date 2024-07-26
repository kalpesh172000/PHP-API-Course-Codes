<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$parts = explode('/', $path);

$resourse = $parts[2];

$id = $parts[3] ?? null;


echo $resourse . " " . $id . "\n";

echo $_SERVER['REQUEST_METHOD'] . "\n";
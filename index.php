<?php

// Author: Mary Lucey
// Date: 6-7-25
// Assignment 4: Templating with Mustache

require_once 'mustache/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

$mustache = new Mustache_Engine;

$header = file_get_contents('templates/header.html');
$body   = file_get_contents('templates/home.html');
$footer = file_get_contents('templates/footer.html');

$header_data = ["pagetitle" => "Home Page"];
$body_data   = [];
$footer_data = ["year" => date("Y")];

echo $mustache->render($header, $header_data) . PHP_EOL;
echo $mustache->render($body, $body_data) . PHP_EOL;
echo $mustache->render($footer, $footer_data) . PHP_EOL;

?>
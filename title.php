<?php

// Author: Mary Lucey
// Date: 6-8-25
// Assignment 4: Templating with Mustache

require_once __DIR__ . '/vendor/autoload.php';

$mustache = new Mustache_Engine;


$header = file_get_contents('templates/header.html');
$body   = file_get_contents('templates/title.html');
$footer = file_get_contents('templates/footer.html');

$header_data = ["pagetitle" => "Title Generation Form"];
$body_data   = [];
$footer_data = ["year" => date("Y")];

echo $mustache->render($header, $header_data) . PHP_EOL;
echo $mustache->render($body, $body_data) . PHP_EOL;



?>
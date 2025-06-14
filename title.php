<?php

// Author: Mary Lucey
// Date: 6-8-25
// Assignment 4: Templating with Mustache

require_once __DIR__ . '/vendor/autoload.php';

$mustache = new Mustache_Engine;


$header = file_get_contents('templates/header.html');
$body   = file_get_contents('templates/title.html');
$footer = file_get_contents('templates/footer.html');



?>
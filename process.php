<?php

// Author: Mary Lucey
// Date: 6-29-25
// Assignment 4: Templating with Mustache

// STEP 0: Prevent direct GET access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	require_once __DIR__ . '/vendor/autoload.php';
    $mustache = new Mustache_Engine;





?>
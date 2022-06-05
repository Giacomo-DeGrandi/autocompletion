<?php

require_once('Model/Autocompletion.php');
require_once('Functions/extracted.php');

$complete = new Autocomplete();

// this is because wamp is turning on PHP 7.4 and str_contains exists from PHP 8.0

// this is because my wamp is turning on PHP 7.4 and str_contains exists since PHP 8.0

if (!function_exists('str_contains')) {
    function str_contains($haystack,$needle)
    {
        return '' === $needle || false !== strpos($haystack, $needle);
    }
}


if(isset($_POST['head'])){
    // add here security
    $search = $_POST['head'];
    extracted($complete, $search);
    die();
}





<?php

require_once('Model/Autocompletion.php');
require_once('Functions/extracted.php');


$complete = new Autocomplete();

// this is because my wamp is turning on PHP 7.4 and str_contains exists since PHP 8.0

if (!function_exists('str_contains')) {
    function str_contains($haystack,$needle)
    {
        return '' === $needle || false !== strpos($haystack, $needle);
    }
}

foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars((string)$value, ENT_NOQUOTES | ENT_HTML5 | ENT_SUBSTITUTE,
        'UTF-8', /*double_encode*/false );
}

if(isset($_POST['val'])){
    // add here security
    $search = $_POST['val'];
    extracted($complete, $search);

}



   

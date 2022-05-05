<?php

require_once('../../php/Model/Model.php');
require_once('../../php/Model/Autocompletion.php');

$complete = new Autocomplete();

foreach ($_GET as $key => $value) {
    $_GET[$key] = htmlspecialchars((string)$value, ENT_NOQUOTES | ENT_HTML5 | ENT_SUBSTITUTE,
        'UTF-8', /*double_encode*/false );
}

if (!function_exists('str_contains')) {
    function str_contains (string $haystack, string $needle)
    {
        return empty($needle) || strpos($haystack, $needle) !== false;
    }
}

if(isset($_GET['search'])){
    if(strlen($_GET['search'])>1){
        $res = $complete->getAllByMulLetter($_GET['search']);
        $resAdd = $complete->getAllByLetter($_GET['search']);
        array_push($resAdd,...$res);

        $res = array_unique($resAdd,SORT_REGULAR);

    } else {
        $res = $complete->getAllByLetter($_GET['search']);
        if($res[0]['name'][0]!==$_GET['search']){
            $resAdd = $complete->getAllByMulLetter($_GET['search']);
            $res = $complete->getAllByLetter($_GET['search']);
            array_push($res,...$resAdd);

            $res = array_unique($res,SORT_REGULAR);

        }
    }
}
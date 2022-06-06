<?php

require_once('Model/Autocompletion.php');
require_once('Functions/extracted.php');
require_once('Functions/sf.php');


$complete = new Autocomplete();


if(isset($_POST['head'])) {
    $search  = htmlspecialchars(filter_var($_POST['head'], FILTER_SANITIZE_STRING), ENT_QUOTES, 'UTF-8');
    $list = listIt($complete, $search);
    print_r(json_encode($list));
    die();
}





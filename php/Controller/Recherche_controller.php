<?php

require_once('../../php/Model/Model.php');
require_once('../../php/Model/Autocompletion.php');

$complete = new Autocomplete();

if(isset($_GET['search'])){
    if(strlen($_GET['search'])>1){
        $first = $complete->getAllByMulLetter($_GET['search']);
    } else {
        $first = $complete->getAllByLetter($_GET['search']);
    }
    var_dump($first);
}
<?php

require_once('../../php/Model/Model.php');
require_once('../../php/Model/Autocompletion.php');

$complete = new Autocomplete();

if(isset($_GET['search'])){
    if(strlen($_GET['search'])>1){
        $res = $complete->getAllByMulLetter($_GET['search']);
        $resAdd = $complete->getAllByLetter($_GET['search']);
        array_push($res,...$resAdd);
        $res = array_unique($res,SORT_REGULAR);
    } else {
        $res = $complete->getAllByLetter($_GET['search']);
        if($res[0]['name'][0]!==$_GET['search']){
            $res = $complete->getAllByMulLetter($_GET['search']);
            $resAdd = $complete->getAllByLetter($_GET['search']);
            array_push($res,...$resAdd);
            $res = array_unique($res,SORT_REGULAR);
        }
    }
    var_dump($res);
}
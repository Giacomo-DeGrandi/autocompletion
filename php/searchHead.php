<?php

require_once('Model/Autocompletion.php');

$complete = new Autocomplete();

// this is because wamp is turning on PHP 7.4 and str_contains exists from PHP 8.0

if (!function_exists('str_contains')) {
    function str_contains(string $haystack, string $needle): bool
    {
        return '' === $needle || false !== strpos($haystack, $needle);
    }
}

if(isset($_POST['head'])){
    // add here security
    $search = $_POST['head'];
    $all = $complete->getIns($search);

    $all2 = $all; // alias for ids
    $names =  [];
    $ids = [];

    for($j=0;$j<=isset($all[$j]);$j++){
        foreach($all2[$j] as $l => $p ){
            if($l === 'name'){
                $names[] = $p;
            } else if( $l === 'id'){
                $ids[] = $p;
            }
        }
    }
    $nameall = array_combine($ids,$names);
    $lastArr = [];
    $lastIds = [];
    foreach($nameall as $k => $v){
        if(str_contains(strtolower($v),$search)){
            $lastArr[] = $v;
            $lastIds[] = $k;
        }
    }
    $nameLast = array_combine($lastIds,$lastArr);

    $n = array_chunk($nameLast,1, true);
    print_r(json_encode($n));
    die();

}

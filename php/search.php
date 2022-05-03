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


$namearr = [];
$ord_keys = [];

if(isset($_POST['val'])){
    // add here security
    $search = $_POST['val'];
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
    // reorder
    // if names_is_arr && search_is_arr
    // split names and search
    // if names_first_firstchar != sear_first_firstchar
    if(isset($names[1]) && isset($search[0]) && isset($names[2])){
        if($names[1][0] !==  $search[0]){

            $alias=$names[2];
            $names[2]=$names[1];
            $names[1]=$alias;
        }
    }

    $arr = array_combine($ids,$names);
    print_r(json_encode($arr)); //my names and ids array
}

/*

    foreach ($all as $k => $v) {
        foreach ($v as $t => $autname) {
            $namearr[] = strtolower($autname);
        }
    }
    $namearr = array_unique($namearr);
    if(isset($namearr[2]) && isset($search[0]) && isset($namearr[4])){
        if($namearr[2][0] !==  $search[0]){

            $alias=$namearr[4];
            $namearr[4]=$namearr[2];
            $namearr[2]=$alias;
        }
    }
    for($i=0;$i<count($namearr);$i++){
        $ord_keys[] = $i;
    }
    $nameall = array_combine($ord_keys,$namearr);




if(isset($_POST['val'])){
	$search = $_POST['val'];
    $all = $complete->getIns($search);
    foreach ($all as $k => $v) {
        foreach ($v as $t => $autname) {
            $namearr[] = strtolower($autname);
        }
    }
    $namearr = array_unique($namearr);

    if(isset($namearr[2]) && isset($search[0]) && isset($namearr[4])){
        if($namearr[2][0] !==  $search[0]){

            $alias=$namearr[4];
            $namearr[4]=$namearr[2];
            $namearr[2]=$alias;
        }
    }
    for($i=0;$i<count($namearr);$i++){
        $ord_keys[] = $i;
    }
    $nameall = array_combine($ord_keys,$namearr);
    print_r(json_encode($nameall));
    //print_r($ord_keys);

}
*/
   

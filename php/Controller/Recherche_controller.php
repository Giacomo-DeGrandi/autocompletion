<?php

require_once('../../php/Model/Model.php');
require_once('../../php/Model/Autocompletion.php');
require_once('../../php/Functions/sf.php');

$complete = new Autocomplete();


if(isset($_GET['search'])){

    $res = $complete->getAllByMulLetter($_GET['search']);
    $all = $complete->getInsAll();

    $un =[];

    for($i=0;$i<=isset($all[$i]);$i++){
        for($j=0;$j<=isset($all[$i][$j]);$j++){
            if(isset($res[$i][$j])){
                if($all[$i][$j] !== $res[$i][$j]){
                    $un[]=$all[$i];
                }
            }
        }

    }
    var_dump($un);
    var_dump($res);
    var_dump($all);


}

/*
 *
for($i=0;$i<=isset($all[$i]);$i++){
    $key = array_search($res[$i], $all[$i],true);
    if ($key !== false) {
        unset($all[$key]);
    }
}

$all = array("a" => "red", "b" => "blue", "c" => "green");
$res[$i] = "blue";

$key = array_search($res[$i], $all, true);
if ($key !== false) {
    unset($all[$key]);
}

echo json_encode($arr);


Output: {"a":"red","c":"green"}
*/

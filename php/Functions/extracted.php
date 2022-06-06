<?php

function listIt(Autocomplete $complete, $search): array
{
    // get all the id and names
    $all = $complete->getIns();

    $all2 = $all; // alias for ids
    $names = [];    // stack for names
    $ids = [];  // stack for ids

    //extract ids as indexes and names as values
    for ($j = 0; $j <= isset($all[$j]); $j++) {
        foreach ($all2[$j] as $l => $p) {
            if ($l === 'name') {
                $names[] = $p;
            } else if ($l === 'id') {
                $ids[] = $p;
            }
        }
    }
    // combine stacks for
    $nameall = array_combine($ids, $names);
    //new arr to fill with sorted values
    $myArr = [];
    // perform sort based on contained values
    foreach ($nameall as $k => $v) {
        if (str_contains(strtolower($v), $search)) {
            //save indexes and  values to a new ordered array exploitable by a 4 loop
            $myArr[] = [$k => $v];
        }
    }
    $id = [];   // stack for id first letter
    $val = [];  // stack for val first letter
    // loop through this new array
    for($i=0;$i<=isset($myArr[$i]);$i++){
        // set cond for true even if here it should be already true
        // but my dear PHP 'IS A LAGGING LANGUAGE'
        if(isset($myArr[$i])){
            // foreach
            foreach($myArr[$i] as $k => $v){
                for($m=0;$m<=isset($v[$m]);$m++){
                    if(strtolower($search[0]) === strtolower($v[0])){
                        $id[]=$k;
                        $val[]=$v;
                    }
                }
            }
        }
    }
    $valArr = array_combine($id, $val);
    $myNewArr = [];
    function flat($arr): array
    {
        $key=[];
        $val=[];
        foreach($arr as $k=> $v){
            foreach($v as $l => $m ){
                $key[] = $l;
                $val[] = $m;
            }
        }
        return array_combine($key, $val);
    }

    $myNewArr = flat($myNewArr);

    $mergeArr = $valArr + $myNewArr;

    $defArr = array_unique($mergeArr);

    // stack for id first letter

    return array_chunk($defArr, 1, true);
}
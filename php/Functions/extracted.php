<?php

function extracted(Autocomplete $complete, $search)
{
    $all = $complete->getIns($search);

    $all2 = $all; // alias for ids
    $names = [];
    $ids = [];

    for ($j = 0; $j <= isset($all[$j]); $j++) {
        foreach ($all2[$j] as $l => $p) {
            if ($l === 'name') {
                $names[] = $p;
            } else if ($l === 'id') {
                $ids[] = $p;
            }
        }
    }
    $nameall = array_combine($ids, $names);
    $lastArr = [];
    $lastIds = [];
    foreach ($nameall as $k => $v) {
        if (str_contains(strtolower($v), $search)) {
            $lastArr[] = $v;
            $lastIds[] = $k;
        }
    }
    $nameLast = array_combine($lastIds, $lastArr);

    $n = array_chunk($nameLast, 1, true);
    print_r(json_encode($n));
}
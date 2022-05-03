<?php

require_once('Model.php');

class Autocomplete extends Model{

    function __construct(){}

    function getIns($input){
		$sql = "SELECT name,id FROM elements WHERE INSTR (name, :input )";
        $p = [':input' => $input ];
        $r = $this->selectQuery($sql,$p);
        $r = $r->fetchAll();
        return $r;
    }

    function getAllByLetter($input){
        $sql = "SELECT * FROM elements WHERE INSTR (name, :input )";
        $p = [':input' => $input ];
        $r = $this->selectQuery($sql,$p);
        $r = $r->fetchAll();
        return $r;
    }
}



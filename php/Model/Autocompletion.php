<?php

require_once('Model.php');

class Autocomplete extends Model{

    function __construct(){}

    function getIns($input){
        $input = '^['.$input.']';
        $sql = "SELECT DISTINCT name,id FROM elements ORDER BY name REGEXP :input DESC, name";
        $p = [':input' => $input ];
        $r = $this->selectQuery($sql,$p);
        $r = $r->fetchAll();
        return $r;
    }

    function getAllByLetter($input){
        $input = '^['.$input.']';
        $sql = "SELECT DISTINCT name,id,description,data1,provenance FROM elements ORDER BY name REGEXP :input DESC, name";
        $p = [':input' => $input ];
        $r = $this->selectQuery($sql,$p);
        $r = $r->fetchAll();
        return $r;
    }
    function getAllByMulLetter($input){
        $sql = "SELECT name,id,description,data1,provenance FROM elements WHERE INSTR (name, :input )";
        $p = [':input' => $input ];
        $r = $this->selectQuery($sql,$p);
        $r = $r->fetchAll();
        return $r;
    }
}



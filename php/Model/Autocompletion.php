<?php

require_once('Model.php');

class Autocomplete extends Model{

    function __construct(){}

    function getIns(){
        $sql = "SELECT name,id FROM elements";
        $r = $this->selectQuery($sql);
        return $r->fetchAll();
    }

    function getAllByMulLetter($input){
        $sql = "SELECT name,id,description,data1,provenance FROM elements WHERE INSTR (name, :input ) ORDER BY name DESC";
        $p = [':input' => $input ];
        $r = $this->selectQuery($sql,$p);
        return $r->fetchAll();
    }
    function getInsAll(){
        $sql = "SELECT * FROM elements";
        $r = $this->selectQuery($sql);
        return $r->fetchAll();
    }

    function getElById($id){
        $p=[':id' => $id];
        $sql = "SELECT * FROM elements WHERE id = :id";
        $r = $this->selectQuery($sql,$p);
        return $r->fetchAll();
    }

}



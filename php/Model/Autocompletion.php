<?php

require_once('Model.php');

class Auto extends Model{

    function __construct(){}

    function getAll(){
		$sql = "SELECT * FROM elements";
        $r = $this->selectQuery($sql);
        $r = $r->fetchAll();
        return $r;
    }

}

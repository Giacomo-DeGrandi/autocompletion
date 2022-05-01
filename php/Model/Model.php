<?php

abstract class Model{

    public $conn;

    function connect(){

        $server="localhost:3600";
        $username="autocompletionuser";
        $password="autocompletionuser";
        $database="carlo-de-grandi-giacomo_autocompletion";

        $dsn = "mysql:host=$server;dbname=$database;charset=UTF8";
        $this->conn = new PDO($dsn, $username, $password);
        return $this->conn;
    }

    function selectQuery($sql, $p = null){
        if ($p === null) {
            $r = $this->connect()->query($sql);
        } else {
            $r = $this->connect()->prepare($sql);
            $r -> execute($p);
        }
        return $r;
    }


}

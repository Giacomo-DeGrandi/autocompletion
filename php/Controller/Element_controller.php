<?php

require_once('../../php/Model/Model.php');
require_once('../../php/Model/Autocompletion.php');

$complete = new Autocomplete();

if(isset($_GET['id'])){
   $res =  $complete->getElById($_GET['id']);
}
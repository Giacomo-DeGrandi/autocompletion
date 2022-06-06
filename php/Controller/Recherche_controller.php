<?php

require_once('../../php/Model/Model.php');
require_once('../../php/Model/Autocompletion.php');
require_once('../../php/Functions/sf.php');

$complete = new Autocomplete();


if(isset($_GET['search'])){
    $res = $complete->getInsAll();
}

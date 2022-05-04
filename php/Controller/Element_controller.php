<?php


require_once('../../php/Model/Model.php');
require_once('../../php/Model/Autocompletion.php');

$complete = new Autocomplete();

if (isset($_GET['search'])) {
    $first = $complete->getAllByLetter($_GET['search']);
    var_dump($first);
}
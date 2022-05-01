<?php

require_once('php/Model/Model.php');
require_once('php/Model/Autocompletion.php');
include('php/search.php');

ob_start();
?>
    <div class="container-fluid">
      <div class="d-flex flex-column align-items-center justify-content-center display-1 text-info p-5">
			<label for="search" class="p-3 text-warning"><b>N<del class="text-muted">G</del>oogle</b></label><br>
			<div class="input-group mb-3 input-group-lg">
  				<input type="text" class="form-control bg-dark text-white" 
					   placeholder="search" aria-label="Search" aria-describedby="basic-addon2" id="search"><br>
 				<span class="input-group-text bg-dark border border-0">🔎</span>
			</div>
			<button type="submit" class="btn btn-outline-dark bg-warning border border-0 rounded-2 shadow" name="recherche" id="recherche">search</button>
      </div>
    </div>
<?php 

$index = ob_get_clean();  

require_once('php/View/main.php');


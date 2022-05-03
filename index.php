<?php

require_once('php/Model/Model.php');
require_once('php/Model/Autocompletion.php');
require_once('php/search.php');

ob_start();
?>
    <script src="public/js/script.js" type="application/javascript"></script>
<?php
$script = ob_get_clean();

ob_start();
?>
    <div class="container-fluid">
      <div class="d-flex flex-column align-items-center justify-content-center display-1 text-info p-5">
			<label for="search" class="p-3 text-warning"><b>N<del class="text-muted">G</del>oogle</b></label><br>
			<div class="input-group mb-1 input-group-lg">
  				<input type="text" class="form-control bg-dark text-white" autocomplete="off"
					   placeholder="search" aria-label="Search" aria-describedby="basic-addon2" id="search">
 				<span class="input-group-text bg-dark border border-0">🔎</span>
			</div>
          <ul id="autocompleteRes" class="w-100 h5 text-white bg-dark list-unstyled"></ul>

          <button type="submit" class="btn btn-outline-dark bg-warning border border-0 rounded-2 shadow" name="recherche" id="recherche">search</button>
      </div>
    </div>
<?php 

$index = ob_get_clean();  

require_once('php/View/main.php');


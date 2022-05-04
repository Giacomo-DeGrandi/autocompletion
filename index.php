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
			<div class="input-group input-group-lg">
  				<input type="text" class="form-control bg-dark text-white rounded-pill" autocomplete="off"
					   placeholder="search" aria-label="Search" aria-describedby="basic-addon2" id="search">
 				<a class="input-group-text bg-dark border border-0 text-decoration-none rounded-pill ms-1" id="rechercheAddons">🔎</a>
			</div>
          <ul id="autocompleteRes" class="w-100 h5 text-white bg-dark rounded-2 list-unstyled"></ul>

          <a class="bg-warning h5 fw-light p-1 border border-0 rounded-2 shadow rounded-pill" id="recherche">search</a>
      </div>
    </div>
<?php 

$index = ob_get_clean();

require_once('php/View/main.php');


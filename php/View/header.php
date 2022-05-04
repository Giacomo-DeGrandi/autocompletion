<?php


ob_start();
?>
    <div class="container-fluid">
        <div class="d-flex flex-row align-items-center justify-content-center display-6 text-info p-1">
            <a href="../../../index.php" class="p-1 text-warning"><b>N<del class="text-muted">G</del>oogle</b></a> <br>
            <div class="input-group input-group-lg">
                <input type="text" class="form-control bg-dark text-white ms-2 w-75 rounded-pill" autocomplete="off"
                       placeholder="search" aria-label="Search" aria-describedby="basic-addon2" id="searchHeader">
                <a class="input-group-text bg-dark border border-0 rounded-pill ms-1" id="rechercheHeader">🔎</a>
            </div>
        </div>
        <ul id="autocompleteHead" class="w-100 h5 text-white bg-dark rounded-2 list-unstyled"></ul>

    </div>
<?php

$header = ob_get_clean();



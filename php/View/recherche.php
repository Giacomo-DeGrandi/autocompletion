<?php

require_once('../Model/Model.php');
require_once('../Model/Autocompletion.php');
require_once('../Controller/Recherche_controller.php');
require_once('../search.php');

ob_start();
?>
    <script src="../../../public/js/search.js" type="application/javascript"></script>
<?php
$script = ob_get_clean();

ob_start();
?>
    <div class="container-fluid">
        <div class="display-1">OK</div>
    </div>
<?php

$index = ob_get_clean();

require_once('main.php');


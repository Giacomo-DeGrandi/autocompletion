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
        <div class="display-7">
            <?php foreach($res as $num => $details){   ?><?php ?>
                <div class="display-6"><?php  echo $details['name']  ?></div>
                <div class="h5"><?php  echo $details['provenance']  ?></div>
                <div class="h3 fw-light"><?php  echo $details['data1']  ?></div>
                <div class="display-7"><?php  echo $details['description']  ?></div>
            <?php  }   ?>
        </div>
    </div>
<?php

$index = ob_get_clean();

require_once('main.php');


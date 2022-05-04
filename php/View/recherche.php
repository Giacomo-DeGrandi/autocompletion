<?php


require_once('../Controller/Recherche_controller.php');
require_once('../searchHead.php');



ob_start();
?>
    <script src="../../../public/js/header.js" type="application/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../../../public/style/style.css">
<?php
$script = ob_get_clean();




ob_start();
?>
    <div class="container-fluid recherche">
        <div class="display-7 flex-wrap row p-2 shadow-sm">
            <?php foreach($res as $num => $details){   ?><?php ?>
            <a href="../element.php/?id=<?php echo $details['id'] ?>" class="link-dark text-decoration-none p-3">
                <p class="h3"><?php  echo $details['name']  ?>
                    <span class="h3 fw-light"><?php  echo $details['data1']  ?></span><br>
                    <span class="h5"><?php  echo $details['provenance']  ?></span>
                    <span class="h6 fw-light"><?php  echo substr($details['description'], 0,75).'...'  ?></span>
                </p>
            </a>
            <?php  }   ?>
        </div>
    </div>
<?php

$index = ob_get_clean();

require_once('header.php');
require_once('main.php');


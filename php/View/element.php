<?php

require_once('../Model/Model.php');
require_once('../Model/Autocompletion.php');
require_once('../Controller/Element_controller.php');
require_once('../searchHead.php');

$title='element';

ob_start();
?>
    <script src="../../../public/js/header.js" type="application/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../../../public/style/style.css">
<?php
$script = ob_get_clean();

ob_start();
?>
    <div class="container-fluid">
        <div class="display-7 flex-wrap row p-2 shadow-sm p-5">
            <?php foreach($res as $num => $details){   ?><?php ?>
                <div href="element.php/?id=<?php echo $details['id'] ?>" class="p-4 card link-dark text-decoration-none">
                    <p class="h3 p-2"><?php  echo $details['name']  ?>
                        <span class="h3 fw-light"><?php  echo $details['data1']  ?></span><br>
                        <span class="h5"><?php  echo $details['provenance']  ?></span><br><br>
                        <span class="lead h6 fw-light p-4"><?php  echo $details['description']  ?></span>
                    </p>
                </div>
            <?php  }   ?>
        </div>
    </div>
<?php

$index = ob_get_clean();


require_once('header.php');
require_once('main.php');
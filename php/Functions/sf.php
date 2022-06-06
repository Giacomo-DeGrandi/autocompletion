<?php

// sec functions _______________________________________________________________________________________________________

// foreach $_POST of any key --->>> pass it through htmlspecialchars
// foreach $_GET of any key --->>> pass it through htmlspecialchars

foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars((string)$value, ENT_NOQUOTES | ENT_HTML5 | ENT_SUBSTITUTE,
        'UTF-8', /*double_encode*/false );
}
foreach ($_GET as $key => $value) {
    $_GET[$key] = htmlspecialchars((string)$value, ENT_NOQUOTES | ENT_HTML5 | ENT_SUBSTITUTE,
        'UTF-8', /*double_encode*/false );
}

// filter every $_POST of user input with this controller

$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

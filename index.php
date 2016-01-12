
<?php

    $ajax = isset($_POST['ajax']) ? $_POST['ajax'] : 'false';
    $btnViewLoader = isset($_POST['btnViewLoader']) ? $_POST['btnViewLoader'] : '';

    if ($ajax == 'false') {
        include './view/frmHaupt.php';
    }

?>


<?php

    $ajax = isset($_POST['ajax']) ? $_POST['ajax'] : 'false';
//    $btnViewLoader = isset($_POST['btnViewLoader']) ? $_POST['btnViewLoader'] : '';
    $menuViewLoader = isset($_POST['menuViewLoader']) ? $_POST['menuViewLoader'] : '';

    if ($ajax == 'false') {
        include './view/frmHaupt.php';
    }
    
    

?>

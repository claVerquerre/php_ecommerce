<?php
require_once 'ControllerProduct.php';
// On recupère l'action passée dans l'URL
$action = $_GET['action'];

// Appel de la méthode statique $action de ControllerProduct
if ($action == '') {
    ControllerProduct::readAll();
} else if ($action == "readAll" || $action == "read") {
    ControllerProduct::$action();
} else {
    printf('Error');
}

?>
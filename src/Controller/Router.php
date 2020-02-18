<?php
require_once 'ControllerProduct.php';

// On recupère l'action passée dans l'URL
$action = htmlspecialchars($_GET['action'] ?? "readAll");

// Appel de la méthode statique $action de ControllerProduct
if ($action == "readAll") {
    ControllerProduct::$action();
} 
else if ($action == "read") {
    ControllerProduct::$action();
} 
else {
    printf('L\'action demandée n\'existe pas.');
}

?>
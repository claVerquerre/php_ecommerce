<?php
require_once ('../Model/Product.php'); // chargement du modèle
	class ControllerProduct {
	    
	    public static function readAll() {
	        $tab_v = ModelProduct::getAll();     //appel au modèle pour gerer la BD
	        require ('../view/voiture/ProductList.php');  //"redirige" vers la vue
	    }

}
?>
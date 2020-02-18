<?php
require_once ('src/Model/ProductRepository.php'); // chargement du modèle
	class ControllerProduct {
	    
	    public static function readAll() {
	        $tab_v = ProductRepository::getAll();  //appel au modèle pour gerer la BD
	        require ('src/View/ProductList.php');  //"redirige" vers la vue
        }
        
        public static function read() {
	    	$id = $_GET["article"];
	    	$v = ProductRepository::getDetails($id);
            require ('src/View/ProductDetails.php');
	    }

}
?>
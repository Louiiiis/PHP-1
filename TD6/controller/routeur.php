<?php
//require_once './ControllerVoiture.php';
require_once (File::build_path(array("controller","ControllerVoiture.php")));
// On recupère l'action passée dans l'URL
if(isset($_GET['action'])){
	$action = $_GET['action'];
	// Appel de la méthode statique $action de ControllerVoiture
	ControllerVoiture::$action(); 
}
else{
	ControllerVoiture::readAll();
}
?>
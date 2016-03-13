<?php
	include("templates/header.php");

	// on récupère le paramètre view éventuel 
	if (isset($_GET["view"])) {
		$view = $_GET["view"];
	}
	else {
		//s'il n'existe pas on met par default acceuil
		$view = "home";
	}

	// En fonction de la vue à afficher, on appelle tel ou tel template
	switch($view)
	{		

		case "home" : 
			include("templates/home.php");
		break;

		case "projects" : 
			include("templates/projects.php");
		break;

		case "members" : 
			include("templates/members.php");
		break;

		case "profil" : 
			include("templates/profil.php");
		break;

		case "login" : 
			include("templates/login.php");
		break;

		case "private_index" : 
			include("templates/private_index.php");
		break;

		case "data" : 
			include("templates/data.php");
		break;

		case "admin_space" : 
			include("templates/admin_space.php");
		break;

		case "inscription" : 
			include("templates/inscription.php");
		break;
	}

	include("templates/footer.php");
?>

Accueil (home)
$array = array(
'title'=>'DEFAULT',
'p'=>array(
'1'=>'DEFAULT',
'2'=>'DEFAULT'));










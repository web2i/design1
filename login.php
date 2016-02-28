<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>maquette1 - Projet Mind-Up</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="all"/>
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</head>

<header id="header">
	<div class="header_block">
		<nav>
			<ul>
				<li><img id="header_logo" src="ressources/logo.png"/></li>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="projets.php">Projets</a></li>
				<li><a href="membres.php">Notre Equipe</a></li>
			</ul>
		</nav>
	</div>
	<div class="share_boxes">
		<a class="box" id="twitter" href="#"><img src="ressources/twitter.png"/></a>
		<a class="box" id="facebook" href="#"><img src="ressources/facebook.png"/></a>
		<a class="box" id="google" href="#"><img src="ressources/google.png"/></a>
	</div>
</header>

<body>

<div id="login_picture"><h2 class="about_title">Connection pour les membres de MindUp</h2></div>

<section id="connection_field">
	<form action="private_index.php" method="POST">
		<!-- Ensemble de champs: Identifiants -->
		<label for="txtLogin" class="info">Login: </label><input class="connection_input" type="text" name="login" value="" /> <br/><br/>
		<label class="info">Mot de Passe: </label><input class="connection_input" type="password" name="mdp" value="" /> <br/><br/>
		<label class="info"></label><input class="connection_btn" type="submit" name="valider" value="Se connecter" /> <br/><br/><br/>
	</form>
</section>

<footer id="footer">
	<div id="footer_container">
		<h5>Copyright© 2015-2016 Web2i. All Rights Reserved.</h5>
	</div>
</footer>
</body>
</html>
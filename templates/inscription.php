<body>

<div id="signUp_picture"></div>

<section id="signUp_field">
		
	<form action="private_index.php" method="POST">
		<label class="info3">Inscription d'un nouveau collaborateur </label> <br/> <br/>
		<!-- Ensemble de champs -->
		<label class="info2">Adresse mail: </label><input class="signUp_input" name="mail" value="" /> <br/>
		<label class="info2">Nom: </label><input class="signUp_input" name="mail" value="" /> <br/>
		<label class="info2">Prenom: </label><input class="signUp_input" name="mail" value="" /> <br/>
		<label class="info2">Mot de passe: </label><input class="connection_input" type="password" name="mdp" value="" /> <br/>
		<label class="info2">Confirmation Mot de passe: </label><input class="connection_input" type="password" name="mdp" value="" /> <br/>
		<label class="info2">Poste exercé: </label> 
		<select id="selectmenu">
			<option selected="selected">Membre</option>
			<option>Secretaire</option>
			<option>Chargé d'affaires</option>
			<option>Président</option>
			<option>Chargé de communication</option>
			<option>Trésorier / Vice Trésorier</option>
		</select> <br/> <br/>
		<label class="info4">Documents joints </label> <br/>
		<div class="SignUp_documents">
			<input type="file" name="nom" />

		</div>
		<div class="SignUp_documents_buttons">
		<input class="signUp_btn2" type="button" name="addDocs" value="Ajouter" />
		<input class="signUp_btn2" type="button" name="removeDocs" value="Supprimer la selection" /> <br/>
		</div>
		<label class="info2">Clés du bureau: </label> <input name="cles" type="checkbox"> <br/>
		<label class="info2"></label><input class="signUp_btn" type="submit" name="valider" value="Valider" /> <br/><br/><br/>
	</form>
</section>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="Style_formulaire.css" />
		<title>Formualire d'inscription</title>
	</head>

	<body>
		<h1>
			Formulaire d'inscription
		<h1>

		<h2>Pour accéder à l'ensemble des fonctionnalités du site, veuillez remplir ce formulaire, aucune informations ne sera publiés sans votre accord.</h2>


		<fieldset class="compte_formulaire">

			<legend>Compte</legend>
			<form method="post" action="formulaire_inscription.php">
			<p>
			<label> Votre adresse email(*)</label> : <input type="email" name="Email" id="adresse email" placeholder="Ex: mon_adresse_mail@ineedeat.fr" size="30" /></p>
			

			<form method="post" action="formulaire_inscription.php">
			<p>
			<label> Votre pseudo(*)</label> : <input type="text" name="pseudo" id="Pseudo" placeholder="Ex: user3432" size="30" /></p>
			

			<form method="post" action="formulaire_inscription.php">
			<p>
			<label for="pass"> Votre mot de passe(*):<label>
			<input type="password" name="pass" id="pass" placeholder="upZcuMu9@"size="30" /> 
			</p>

			

		</fieldset>
		
		<fieldset class="informations_formulaire">
			<legend>Vos coordonees</legend>
			<form method="post" action="formulaire_inscription.php">
			<p>
				<label for="Civilite"> Civilite:</label><br />
				<select name="Civilite" id="Civilite">
					<option value="Monsieur">Monsieur</option>
					<option value="Madame">Madame</option>
				</select>
			</p>
			

			<form method="post" action="formulaire_inscription.php">
			<p>
				<label> Votre nom</label> : <input type="text" name="Nom" id="Nom" placeholder="Ex: Dubois" size="30" /></p>
			



			<form method="post" action="formulaire_inscription.php">
			<p>
				<label> Votre prenom</label> : <input type="text" name="Prenom" id="prenom" placeholder="Ex: Alexandre" size="30" /></p>
			




			<form method="post" action="formulaire_inscription.php">
			<p>
				<label> Votre region</label> : <input type="text" name="Region" id="region" placeholder="Ex: Bretagne" size="30" /></p>
			




			<form method="post" action="formulaire_inscription.php">
			<p>
				<label> Votre adresse</label> : <input type="text" name="Adresse" id="adresse" placeholder="Ex: 5 avenue du general de Gaulle" size="30" /></p>
			


			<form method="post" action="formulaire_inscription.php">
			<p>
				<label> Votre code postal</label> : <input type="number" name="C_P" id="code postal" placeholder="Ex: 84200" size="8" /></p>
			



			<form method="post" action="formulaire_inscription.php">
			<p>
				<label> Votre ville</label> : <input type="text" name="Ville" id="ville" placeholder="Ex: Paris" size="30" /></p>
			



			<form method="post" action="formulaire_inscription.php">
			<p>
				<label> Votre telephone</label> : <input type="tel" name="N_d_T" id="telephone" placeholder="Ex: 06 18 75 79 26" size="17" /></p>
			



			<form method="post" action="formulaire_inscription.php">
			<p>
				<label> Votre date de naissance</label> : <input type="date" name="D_d_N" id="date de naissance" placeholder="Ex: 23/10/1978" size="15" /></p>
			


		</fieldset>

	
		<h4>(*) Ces champs sont obligatoires pour valider l'inscription.</h4>
	
		<form class="bouton_valider"method="post" action="formulaire_inscription.php">
   			<p=class="J_accepte_les_CGU">
       			<br />
       				<input type="checkbox" name="CGU" id="CGU" /> 	<label for="CGU">J'accepte les conditions généralles d'utilisation 
       					</label>
       			<br />
  			</p>
  			<input type="submit" value="Valider" />
		
		</form>
		

<?php
	global $bdd;
   $bdd = mysqli_connect('localhost', 'root', 'root', 'I_NEED_EAT')

?>

          <!-- Affichage des données -->
    
 <?php  // $reponse = $bdd->query('SELECT * FROM Utilisateurs');
     function db($sqlq){ # $sqlq = sql querry;
        global $bdd;
        if(mysqli_query($bdd,$sqlq) === FALSE){
            die("Error:".mysqli_error($bdd)."</br>Query: ".$sqlq);
        } else {
            //mysqli_free_result($sqlq);
            return $sql;
        }
    }
 ?>
          <!-- Gestion des données -->

<?php 
      $Region = $_POST['Region'];
      $Adresse = $_POST['Adresse'];
      $C_P = $_POST['C_P']; 
      $Ville = $_POST['Ville'];
      $Email = $_POST['Email'];
      $Pseudo = $_POST['Pseudo'];
      $Nom = $_POST['Nom'];
      $Prenom = $_POST['Prenom'];
      $Civilite = $_POST['Civilite'];
      $D_d_N = $_POST ['D_d_N'];
      $Identifiant = $_POST['Identifiant'];
      $M_d_P = $_POST['M_d_P'];
      $N_d_T = $_POST['N_d_T'];
      $Email = $_POST ['Email'];
   	

	$s_query='INSERT INTO Utilisateurs (Pseudo, Nom, Prenom, Civilite, D_d_N, Identifiant, M_d_P, N_d_T, Email, Region, Ville, C_P, Adresse) 
	VALUES ("'.$Pseudo.'", "'.$Nom.'", "'.$Prenom.'","'.$Civilite.'", "'.$D_d_N.'", "'.$Identifiant.'", "'.$M_d_P.'", "'.$N_d_T.'", "'.$Email.'", "'.$Region.'", "'.$Ville.'", "'.$C_P.'", "'.$Adresse.'")';
    db($s_query);

?>

		
	</body>
</html>


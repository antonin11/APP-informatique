<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="Style_formulaire.css" />

	</head>
	<body>
<p>
   
    Veuillez compléter ce formulaire :
</p>

<form action="formulaire2.php" method="post">
<p>
	</br>Nom</br>
    <input type="text" name="Nom" />
	</br>Pseudo</br>
    <input type="text" name="Pseudo" />
    </br>Prénom</br>
    <input type="text" name="Prenom" />
    </br>Email</br>
    <input type="text" name="Email" />
    </br>Pseudo</br>
    <input type="text" name="Pseudo" />
    </br>Civilité</br>
    <input type="text" name="Civilité" />
    </br>M_d_P</br>
    <input type="text" name="M_d_P" />
    </br>D_d_N</br>
    <input type="text" name="D_d_N" />
    </br>N_d_T</br>
    <input type="text" name="N_d_T" />
    </br>Identifiant</br>
    <input type="text" name="Identifiant" />
    <input type="submit" value="Valider" />
</p>
</form>
<?php
	global $bdd;
   if ($bdd = mysqli_connect('localhost', 'root', 'root', 'I_NEED_EAT'))
   {
	// Si la connexion a réussi, rien ne se passe.
	echo 'Connecté !!.'; 
}
else // Mais si elle rate…
{
	echo 'Erreur'; // On affiche un message d'erreur.
}
?>

          <!-- Affichage des données -->
    
 <?php  // $reponse = $bdd->query('SELECT * FROM Utilisateurs');
     function db($sqlq){ # $sqlq = sql querry;
        global $bdd;
        if( !$sql=mysqli_query($bdd,$sqlq) ){
            die("Error:".mysqli_errno($sql).":".mysqli_error($sql)."</br>Query: ".$sqlq);
        } else {
            mysqli_free_result($sqlq);
            return $sql;
        }
    }
 ?>
          <!-- Gestion des données -->

<?php $Pseudo = $_POST['Pseudo'];
      $Nom = $_POST['Nom'];
      $Prenom = $_POST['Prenom'];
      $Civilite = $_POST['Civilité'];
      $D_d_N = $_POST ['D_d_N'];
      $Identifiant = $_POST['Identifiant'];
      $M_d_P = $_POST['M_d_P'];
      $N_d_T = $_POST['N_d_T'];

	$s_query='INSERT INTO Utilisateurs (Pseudo, Nom) VALUES ("'.$Pseudo.'", "'.$Nom.'")';
   	

	//$s_query='INSERT INTO Utilisateurs (Pseudo, Nom, Prénom, Civilité, D_d_N, Identifiant, M_d_P, N_d_T) VALUES ("'.$Pseudo.'", "'.$Nom.'", "'.$Prenom.'"
	//"'.$Civilite.'", "'.$D_d_N.'", "'.$Identifiant.'", "'.$M_d_P.'", "'.$N_d_T.'" )';
		db($s_query);

?>
	</body>
</html>
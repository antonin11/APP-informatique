<article>
	<p>
		Bienvenu <?php try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=I_NEED_EAT;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('erreur :' . $e->getMessage());
	}
	// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM utilisateurs WHERE Pseudo=\'Benkouze\'');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
   bienvenu sur votre Compte <?php echo $donnees['Prénom']; ?> <?php echo $donnees['Nom']; ?>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
	?>
	</p>
	<a href="#"> 
		<p> Mon compte </p> 
	</a>
	<p>
		<a href="##"> 
			<img src="images/panier.png" alt="image du panier" id="panier"/>
			<strong>Panier</strong>
		</a>
	</p>
	<p>
		<a href="header/traitement.php">Déconnexion</a>
	</p>
</article>

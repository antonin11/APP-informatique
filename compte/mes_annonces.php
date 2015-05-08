<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mes Annonces</title>
	<meta charset = "utf-8"/>
</head>
<body>
	<?php 
	if(isset($_SESSION['pseudo']))
	{
		$pseudo=$_SESSION['pseudo'];
		include("../invariants/header.php"); ?>	
		<div class="mes_annonces">
			<article class="ventes_en_cours">
				<strong><h1>Ventes en cours</h1></strong>
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=I_NEED_EAT; charset=utf8','root','');
				}
				catch (Exception $e)
				{
					die('erreur : '.$e->getmessage());
				}
				$reponse = $bdd->query('SELECT * FROM annonces WHERE Auteur='".$pseudo."'');
				while ($donnees = $reponse->fetch())
				{
					?>
					<p>
						<strong>titre</strong> : <?php echo $donnees['Nom']; ?> <br/>
					</p>
					<p>
						<strong>prix</strong> : <?php echo $donnees['Prix']; ?>
						<strong>Quantité restante</strong> : <?php echo $donnees['Quantite']; ?>
						Date de mise en vente : <?php echo $donnees['Date']; ?>
					</p>
					<?php
				}
				?>
				</article>
	<?php
	}
else
{
	echo 'Vous devez être inscrit pour accéder à cette page';
	include("../formulaires/inscription.php");
}
	?>	tt
</body>
</html>
iaezuhd

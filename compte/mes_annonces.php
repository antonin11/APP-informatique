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
				$reponse = $bdd->prepare('SELECT * FROM annonces WHERE Auteur = ?');
				$reponse -> execute(array($_SESSION['pseudo']));
				while ($donnees = $reponse->fetch())
				{
					if($donnees['Quantite']!=0)
					{
						?>
						<p>
							<strong>titre</strong> : <?php echo $donnees['Nom']; ?> <br/>
						</p>
						<p>
							Nombre de membre suivant la vente : <?php echo $donnees['Nbr_visite']; ?>
						</p>
						<p>
							<strong>prix</strong> : <?php echo $donnees['Prix']; ?>
							<strong>Quantité restante</strong> : <?php echo $donnees['Quantite']; ?>
							Date de mise en vente : <?php echo $donnees['Date']; ?>
						</p>
						<p><a href="../suppression/supprimer.php?annonce=<?php echo $donnees['id_annonce'];?>">
							<input type="submit" value="supprimer" name="supprimer"/>
						</a>
						<?php
					}
				}
				$reponse->closeCursor();
				?>
			</article>
			<article class="vente_terminées">	
				<strong><h1>Vente terminées</h1></strong>
				<?php
				$reponse = $bdd->prepare('SELECT * FROM annonces WHERE Auteur = ?');
				$reponse -> execute(array($_SESSION['pseudo']));
				while ($donnees = $reponse->fetch())
				{
					if($donnees['Quantite']==0)
					{
						?>
						<p>
							<strong>titre</strong> : <?php echo $donnees['Nom']; ?> <br/>
						</p>
						<p>
							Nombre de membre suivant la vente : <?php echo $donnees['Nbr_visite']; ?>
						</p>
						<p>
							<strong>prix</strong> : <?php echo $donnees['Prix']; ?>
							<strong>Quantité restante</strong> : <?php echo $donnees['Quantite']; ?>
							Date de mise en vente : <?php echo $donnees['Date']; ?>
						</p>
						<p><a href="../suppression/supprimer.php?annonce=<?php echo $donnees['id_annonce'];?>">
							<input type="submit" value="supprimer" name="supprimer"/>
						</a>
					<?php
					}
				}
				?>
				$reponse->closeCursor();
			</article>
		</div>
	<?php
	}
else
{
	echo 'Vous devez être inscrit pour accéder à cette page';
	include("../formulaires/inscription.php");
}
	?>	
</body>
</html>

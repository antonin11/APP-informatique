<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produit</title>
	<meta charset="utf-8"/>
</head>
<body>
	<header>
		<?php 
		include("../invariants/header.php");
		?>
	</header>
	<section>
		<aside>
			<p><img src="#" alt="#"/></p>
		</aside>
		<article class="info">
			<?php require("../bdd/connection.php"); ?>
			<h1> 
				<?php $reponse=$bdd->prepare('SELECT * FROM annonces WHERE id_annonce=?');
				$reponse->execute(array($_GET['id_annonce']));
				$donnees=$reponse->fetch();
				echo $donnees[6]; ?>
			</h1>
			<p>
				<?php echo $donnees[3];?>
			</p>
			<p class="vendeur">
				<?php $donnees[8]; ?>
			</p>
			<p>
				<strong>prix</strong> : <?php echo $donnees[4]; ?>
				<strong>Quantité restante</strong> : <?php echo $donnees[5]; ?>
				Date de mise en vente : <?php echo $donnees[9]; ?>
			</p>
		</article>
		<article>
			<p> 
				<strong>description</strong> : 
				<?php echo $donnees[7]; ?>
			</p>
		</article>
		<article>
			<p>
				détail du <strong>produit</strong> : 
				<?php echo $donnees[0]; ?>
			</p>
		</article>
		<div class="reglement">
			<p> <a href="#"> <input type="submit" value="acheter"/> </a> </p>
			<p> <a href="#"> <input type="submit" value="échanger"/> </a> </p>
		</div>
	</section>
</body>
</html>
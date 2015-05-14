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
		<article>
			<?php include("../bdd/connection.php"); ?>
			<h1> 
				<?php $reponse = $bdd -> prepare('SELECT * FROM annonces WHERE ?');
				$reponse = execute(array($_GET['id_annonce']);
				$donnees = $reponse -> fetch();
				echo $donnees[0]?>
</body>
</head>
</html>
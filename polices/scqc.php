<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produit</title>
	<meta charset="utf-8"/>
</head>
<body>
		<?php include("../invariants/header.php");
		if(!isset($premiere_annonce_affichee))
		{
			$premiere_annonce_affichee=0;
		}
		if(!isset($_GET['limit']))
		{
			$_GET['limit']=0;
		}
		if(!isset($limit))
		{
			$limit=0;
		}
		if(isset($limit))
		{
			if($_GET['limit']<=0)
			{
				$_GET['limit']=0;
			}
			else
			{
				$limit=$_GET['limit'];
			}	
		}
		$premiere_annonce_affichee = $premiere_annonce_affichee + $_GET['limit'];
		require("../bdd/connection.php"); 
		$reponse=$bdd->query('SELECT COUNT(*) AS nb_annonce FROM annonces');
		$donnees=$reponse->fetch();
		if($premiere_annonce_affichee>=$donnees['nb_annonce']-5)
		{
			$limit=$_GET['limit']=$limit-5;
		}
		$reponse=$bdd->query('SELECT * FROM annonces ORDER BY id_annonce DESC LIMIT '.$premiere_annonce_affichee.', 5');
		while($donnees=$reponse->fetch())
		{
			?> 	
			<p>
				<strong>titre</strong> : <a href="../annonces/detail_produit.php?id_annonce=<?php echo $donnees['id_annonce'];?>"><?php echo $donnees['Titre']; ?> </a><br/>
			</p>
			<p>
				Nombre de membre suivant la vente : <?php echo $donnees['Nbr_visite']; ?>
			</p>
			<p>
				<strong>prix</strong> : <?php echo $donnees['Prix']; ?>
				<strong>Quantité restante</strong> : <?php echo $donnees['Quantite']; ?>
				Date de mise en vente : <?php echo $donnees['Date']; ?>
			</p>
			<?php
		}	
		$reponse->closeCursor();
		?>
		<a href="scqc.php?limit=<?php echo $limit-5;?>"> <input type="button" name="précédent" value="précédent"/> </a>
		<a href="scqc.php?limit=<?php echo $limit+5;?>"> <input type="button" name="suivant" value="suivant"/> </a>
</body>
</html>
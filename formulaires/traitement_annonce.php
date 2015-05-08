<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
	<title> cible annonce </title>
</head>
<?php
try
{

	$bdd = new PDO('mysql:host=localhost;dbname=i_need_eat;charset=utf8', 'root', '');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO `i_need_eat`.`annonces` (`categorie`, `article`,`region`, `prix_kg`, `quantite`,`titre_annonce`, `texte_annonce`) VALUES (:categorie,:article, :region, :prix_kg, :quantite, :titre_annonce)');
$req->execute(array(
	
	'categorie' => $_POST['categorie'],
	'article' => $_POST['article'],
	'region' => $_POST['region'],
	'prix_kg' => $_POST['prix_kg'],
	'quantite' => $_POST['quantite'],
	'titre_annonce' => $_POST['titre_annonce']

	));

?>
    <p>
    
    <?php echo 'Votre annonce de ' . $_POST['article']. ' '. 'a bien ete enregistré '; ?> <br /><br />
    <?php echo 'I need eat vous souhaite une agréable journée !'; ?> 
  
   </p>

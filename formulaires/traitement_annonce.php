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
$req = $bdd->prepare('INSERT INTO annonces (Categorie, Article, Region, Prix, Quantite, Titre, Texte) VALUES (:Categorie, :Article, :Region, :Prix, :Quantite, :Titre, :Texte)');
$req->execute(array(
	
	'Categorie' => $_POST['categorie'],
    'Article' => $_POST['article'],
    'Region' => $_POST['region'],
    'Prix' => $_POST['prix'],
    'Quantite' => $_POST['quantite'],
    'Titre' => $_POST['titre'],
    'Texte' => $_POST['texte']
   
	));

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
	<title> Ajouter une annonce </title>
</head>

<body>

<h3> Ajouter une nouvelle annonce </h3> 

<form method="post" action="traitement_annonce.php">
<p>

Catégorie : <select name="categorie">
    <option value="Fruit">Fruit</option>
    <option value="Legume">Legume</option>
	</select> </br></br>
article : <input type="text" name="article" placeholder="tomate,banane,.." /> </br> </br> 
Region : <select name="region">
    <option value="Alsace">Alsace</option>
    <option value="Aquitaine">Aquitaine</option>
    <option value="Auvergne">Auvergne</option>
    <option value="Basse Normandie">Basse Normandie</option>
    <option value="Bourgogne">Bourgogne</option>
    <option value="Bretagne">Bretagne</option>
    <option value="Centre">Centre</option>
    <option value="Champagne-Ardenne">Champagne-Ardenne</option>
    <option value="Corse">Corse</option>
    <option value="Franche-Comté">Franche-Comté</option>
    <option value="Haute Normandie">Haute Normandie</option>
    <option value="Ile-de-France">Ile-de-France</option>
    <option value="Languedoc-Roussillon">Languedoc-Roussillon</option>
    <option value="Limousin">Limousin</option>
    <option value="" alue="Lorraine">Lorraine</option>
    <option value="Midi-Pyrénées">Midi-Pyrénées</option>
    <option value="Nord-Pas-de-Calais">Nord-Pas-de-Calais</option>
    <option value="Pays de la Loire">Pays de la Loire</option>
    <option value="Picardie">Picardie</option>
    <option value="Poitou-Charentes">Poitou-Charentes</option>
    <option value="Provence-Alpes-Côte-d'Azur">Provence-Alpes-Côte-d'Azur</option>
    <option value=">Rhône-Alpes">Rhône-Alpes</option>
  
	</select> </br></br>
Prix/kg : <input type="text" name="prix" size="1" /> €/kg  Quantité : <input type="text" name="quantite" size="1" /> kg </br> </br>
titre de l'annonce : <input type="text" name="titre" /> </br> </br> 
texte de l'annonce: <input type="text" name="texte" /> </br> </br>
Valider ma nouvelle annonce <input type="submit" name="valider"/> 

<?php
try
{

	$bdd = new PDO('mysql:host=localhost;dbname=i_need_eat;charset=utf8', 'root', '');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}

?>

</p>
</form>

</body>

</html>

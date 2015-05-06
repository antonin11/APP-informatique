<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Style_annonces.css" />
      <title>Annonces</title>
  </head>
  <body>
    <h1>Formulaire d'annonce<h1>
    <h2>Pour accéder à l'ensemble des fonctionnalités du site, veuillez remplir ce formulaire, aucune informations ne sera publiés sans votre accord.</h2>


   <fieldset class="formulaire_annonce">
<legend>Produit</legend>
      <form method="post" action="Accueil.php">
      <p>
      <label> Produit(*)</label> : <input type="text" name="Produit" id="Produit" placeholder="Ex: Tomates cerises" size="30" /></p>
      

      <form method="post" action="Accueil.php">
      <p>
      <label> Type(*)</label> : <input type="text" name="pseudo" id="Pseudo" placeholder="Ex: user3432" size="30" /></p>
      

      <form method="post" action="Accueil.php">
      <p>
      <label for="pass"> Nom de l'annonce(*):<label>
      <input type="test" name="nom_annonce" id="nom_annonce" placeholder="Fruit"size="30" /> 
      </p>
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
        if(mysqli_query($bdd,$sqlq) === FALSE){
            die("Error:".mysqli_error($bdd)."</br>Query: ".$sqlq);
        } else {
            //mysqli_free_result($sqlq);
            return $sql;
        }
    }          

 ?>
          <!-- Gestion des données -->

<?php 
      $Produit = $_POST['Produit'];
      $Type = $_POST['Type'];
      $Nom = $_POST['Nom']; 
      $Auteur = $_POST['Auteur'];
      $Quantite = $_POST['Quantite'];
      $Date = $_POST['Date'];
      $Nbr_visite = $_POST['Nbr_visite'];
      $Prix = $_POST['Prix'];
      $Producteur = $_POST['Producteur'];
   	  $Nom_prod = $_POST['Nom_prod']
      $Nom_cat = $_POST['Nom_cat']
      $Nom_var = $_POST['Nom_var'];

	$s_query='INSERT INTO Annonces (Produit, Type, Nom, Auteur, Quantite, Date, Nbr_visite, Prix) 
	VALUES ("'.$Produit.'", "'.$Type.'", "'.$Nom.'","'.$Auteur.'", "'.$Quantite.'", "'.$Date.'", "'.$Nbr_visite.'", "'.$Prix.'")';

  $s_query='INSERT INTO Produits (Producteur, Nom_prod, Nbr_visite, Prix) 
  VALUES ("'.$Producteur.'", "'.$Nom_prod.'", "'.$Nbr_visite.'", "'.$Prix.'")';
  
  $s_query='INSERT INTO Catégories (Nom_cat, Nbr_visite,) 
  VALUES ("'.$Nom_cat.'", "'.$Nbr_visite.'")';

  $s_query='INSERT INTO Variétés (Nom_var, Nbr_visite,) 
  VALUES ("'.$Nom_cat.'", "'.$Nbr_visite.'")';
  


    db($s_query);
    

?>
</body>
</html>
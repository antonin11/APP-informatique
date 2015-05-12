<?php


try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host= localhost; dbname= I_NEED_EAT; charset=utf8', 'root', 'root');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}



$req = $bdd->prepare('INSERT INTO `I_NEED_EAT`.`Utilisateurs` (`Pseudo`, `Nom`, `Prenom`, `Civilite`, `D_d_N`, `Identifiant`, `M_d_P`, `N_d_T`, `Email`, `Region`, `Ville`, `C_P`, `Adresse`) VALUES (:Pseudo, :Nom, :Prenom, :Civilite, :D_d_N, :Identifiant, :M_d_P, :N_d_T, :Email, :Region, :Ville, :C_P, :Adresse)');
$req->execute(array(
	
	'Region' = $_POST['Region'],
    'Adresse' = $_POST['Adresse'],
    'C_P' = $_POST['C_P'],
    'Ville' = $_POST['Ville'],
    'Email' = $_POST['Email'],
    'Pseudo' = $_POST['Pseudo'],
    'Nom' = $_POST['Nom'],
    'Prenom' = $_POST['Prenom'],
    'Civilite' = $_POST['Civilite'],
    'D_d_N' = $_POST ['D_d_N'],
    'Identifiant' = $_POST['Identifiant'],
    'M_d_P' = $_POST['M_d_P'],
    'N_d_T' = $_POST['N_d_T'],
    'Email' = $_POST ['Email']
	));
?>
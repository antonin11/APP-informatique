<?php session_start(); 
	include("../bdd/connection.php");
	$reponse = $bdd -> prepare('SELECT mdp FROM utilisateurs WHERE pseudo = ? ');
	$reponse -> execute(array($_POST['pseudo']));
	$donnees = $reponse-> fetch();
	if(isset($donnees[0]) AND $donnees[0] == $_POST['mdp'])
		{
			$_SESSION['pseudo']= $_POST['pseudo'];
			$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
			header('Location: ' . $referer);
		}
	else
	{
		$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
		header('Location: ' . $referer);
	}
$reponse->closeCursor();
?>
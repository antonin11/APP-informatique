<?php 
include("../bdd/connection.php");
$req = $bdd -> prepare('DELETE FROM annonces WHERE id_annonce = ?');
$req ->execute(array($_GET['annonce']));
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
		header('Location: ' . $referer);
		$reponse->closeCursor();
?>
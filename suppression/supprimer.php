<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=I_NEED_EAT; charset=utf8','root','');
}
catch (Exception $e)
{
	die('erreur : '.$e->getmessage());
} 
$req = $bdd -> prepare('DELETE FROM annonces WHERE id_annonce = ?');
$req ->execute(array($_GET['annonce']));
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
		header('Location: ' . $referer);
?>
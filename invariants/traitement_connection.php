<?php session_start(); ?>
<?php 
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=I_NEED_EAT;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('erreur :' . $e->getMessage());
	}
<<<<<<< HEAD
	$reponse = $bdd -> prepare('SELECT Mdp FROM utilisateurs WHERE Pseudo = ? ');
	$reponse -> execute(array($_POST['pseudo']));
	$donnes = $reponse-> fetch();

	if( $donnes[0] == $_POST['pass'])
=======
	$reponse = $bdd -> prepare('SELECT mdp FROM utilisateurs WHERE pseudo = ? ');
	$reponse -> execute(array($_POST['pseudo']));
	$donnes = $reponse-> fetch();

	if( $donnes[0] == $_POST['mdp'])
>>>>>>> origin/master
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

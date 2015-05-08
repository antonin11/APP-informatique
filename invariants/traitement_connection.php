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
	$reponse = $bdd->query('SELECT M_d_P, Pseudo FROM utilisateurs');
	while($donnees = $reponse->fetch())
	{
		if($donnees['Pseudo']==$_POST['pseudo'])
		{
			if($donnees['M_d_P']==$_POST['pass'])
			{
				$_SESSION['pseudo']= $_POST['pseudo'];
				$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
				header('Location: ' . $referer);
			}
		}
	else
	{
		$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
		header('Location: ' . $referer);
	}
}
$reponse->closeCursor();
?>

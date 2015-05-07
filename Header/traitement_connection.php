<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=I_NEED_EAT;charset=utf8', 'root', '');
}
catch (Exception $e)
{
	die('erreur :' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM utilisateurs');
while ($donnees = $reponse->fetch())
{
	if($donnees['Pseudo']==$_POST['pseudo'])
	{
		if($donnees['M_d_P']==$_POST['pass'])
		{
			$_SESSION['pseudo']= $donnees['Pseudo'];
		}
	}
	else
	{
		unset($_POST);
	}
}

$reponse->closeCursor();
?>

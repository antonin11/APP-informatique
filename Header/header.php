<?php session_start(); ?>

	<header>	
		<article id="log">
			<p>
				<a href="accueil.php">
					<img src="images/logo_i_need_eat_miniature.png" alt="logo I need Eat" title="page d'accueil" id="logo">
				</a>
			</p>
		</article>
		<div id="search_bar">	
			<form action="traitement.php" method="post" >
				<p>
					<input type="search" name="search" placeholder="recherche" size="50" maxlength="50"/>
				</p>
			</form>
		</div>
		<section>		
			<?php 

	$pseudo=$_POST['pseudo'];
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=I_NEED_EAT;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('erreur :' . $e->getMessage());
	}
	$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE Pseudo=?');
	$req->execute(array($_POST['pseudo']));

	if($_POST['pseudo']==$req['Pseudo']);
	{
		include("connection_connecte.php");
	}
	else
	{
		include("connection_non_connecte.php");
	}

	

?>
		</section>
		<nav>
			<ul class="menu">
				<li><a href="#">Offres</a></li>
				<li><a href="#">Demandes</a></li>
				<li><a href="#">Poser une annonce</a></li>
				<li><a href="#">Mes annonces</a></li>
			</ul>
		</nav>
	</header>

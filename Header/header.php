<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="style_header.css" type="text/css" />
</head>
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
			</from>
		</div>
		<section>		
			<article>
				<p>
					<form action="traitement.php" method="post">
						<input type="email" name="email" placeholder="Email"/>
						<input type="password" name="pass" placeholder="Mot de passe"/>
						<input type="submit" value="Se connecter"/>
					</forme>
				</p>
				<p class="complement_connection">
					<a href="formulaire_inscription.php"> Pas encore inscrit ? </a>
				</p>
				<p class="complement_connection">
					<a href="récupérer_mot_de_passe.php"> Mot de passe oublié ? </a>
				</p>
			</article>	
			<aside>
				<p>
					<a href="##"> 
						<img src="images/panier.png" alt="image du panier" id="panier"/>
						<strong>Panier</strong>
					</a>
				</p>
			</aside>
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
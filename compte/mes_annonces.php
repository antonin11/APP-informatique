<?php
session_start();
$_SESSION['pseudo']='bernard';
?>
<div class="mes_annonces">
	<article class="ventes-en-cours">
		<strong><h1>Vente en cours</h1></strong>
		<?php
		try
		{
		$bdd = new PDO('mysql:host=localhost;dbname=I_NEED_EAT; charset=utf8','root','');
		}
		catch (Exception $e)
		{
			die('erreur : '.$e->getmessage());
		}
		$reponse = $bdd->query('SELECT * FROM annonces WHERE Auteur=\'bernard\'');
		
while ($donnees = $reponse->fetch())
{
?>
<p>
	<strong>titre</strong> : <?php echo $donnees['Nom']; ?> <br/>
</p>
<p>
	<strong>prix</strong> : <?php echo $donnees['Prix']; ?>
	<strong>Quantité restante</strong> : <?php echo $donnees['Quantite']; ?>
	Date de mise en vente : <?php echo $donnees['Date']; ?>
</p>
<?php
}
?>	
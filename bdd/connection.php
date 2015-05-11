$bdd=NULL;
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=I_NEED_EAT; charset=utf8','root','');
}
catch (Exception $e)
{
	die('erreur : '.$e->getmessage());
}
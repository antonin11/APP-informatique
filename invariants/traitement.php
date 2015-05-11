<?php session_start(); ?>
<?php 
	$_SESSION['pseudo']=NULL;
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header('Location: ' . $referer);
?>

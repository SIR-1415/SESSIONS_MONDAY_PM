<?php
// retomar sessao existente ou criar sessao nova
session_start();

// verifica se username esta instanciado => sessao ativa
if (isset($_SESSION['username'])) {
	header("location:index.php");
	//echo ("sessao existe com username = ". $_SESSION['username']);
	exit();
}

// verifica se esiste variavel username GET

if (isset($_GET['username'])) {
	$_SESSION['username'] = $_GET['username'];
	header("location:index.php");
	//echo ("sessao criada com username = ". $_SESSION['username']);
	exit();
}

?>

<p><a href="login.php?username=red">red</a></p>
<p><a href="login.php?username=blue">blue</a></p>
<p><a href="login.php?username=green">green</a></p>
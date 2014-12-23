<?php
session_start();
// se not logged 
if (!isset($_SESSION['username'])) {
	header("location:login.php");
	exit();
}

$color = $_SESSION['username'];
// se logged
?>

<img src="images/<?php echo $color?>.jpeg"/>
<br/>
<a href="index.php">voltar</a>


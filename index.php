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

<html>
	<head>
		<style>
			a {color:yellow;}
			
			body {
				color: silver;
				background-color:<?php echo $color?>;
				}
		</style>
	</head>
	<body>
		<h1>portal secreto</h1>
		<h2>ola <?php echo $_SESSION['username']?></h2>
		<p> aceda a este conteudo secreto <a href="secreto.php"> aqui </a></p>
		<p> <a href="logout.php">logout</a> </p>
	</body>
</html>

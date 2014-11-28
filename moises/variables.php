<?php
	include_once ('conexion.php');
	$titulo = "Get Y Post";
?>

<!DOCTYPE HTML>
<html>
<head>
	
	<meta charset = "UTF-8">
	<title><?php echo $titulo; ?></title>

</head>

<body>

<h1><?php echo $titulo; ?></h1>

<?php include_once('menu.php') ;?>

<h3> Variables por Get </h3>

<a href="resultado.php?id=1"> Variables por Get</a>

</body>
</html>
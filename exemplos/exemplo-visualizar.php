<?php 
	include('../php/conexao.php');

	$id = $_GET['idPost'];

	$query = " SELECT * FROM posts WHERE id = $id ";

	$sql = mysql_query($query) or die( mysql_error() );

	$result = mysql_fetch_array($sql);


	echo $id;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Visualizar</title>
</head>
<body>

	<h1><?php echo $result['titulo']; ?></h1>

	<p> <?php echo $result['conteudo']; ?></p>
	
</body>
</html>
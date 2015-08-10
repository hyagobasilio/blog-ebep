<?php 
include('../php/conexao.php');

$sql = " SELECT * FROM posts order by id desc";
$query = mysql_query($sql) or die(mysql_error());

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listagem</title>
</head>
<body>
	
	<h3>Matérias</h3>
	<ul>
		<?php while ($rs = mysql_fetch_array($query)) { ?>
		<li>
			<a href="exemplo-visualizar.php?idPost=<?php echo $rs['id']; ?>"> <?php echo $rs['titulo']; ?> </a>
		</li>
		<?php } ?>
		
	</ul>

</body>
</html>
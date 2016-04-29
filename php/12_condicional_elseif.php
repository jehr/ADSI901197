<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional Else If</title>
</head>
<body>
	<h1>Condicional Else If</h1>
	<hr>

	<?php 
	$dia = date("D");
	if($dia == "Fri") {
		echo 'Tenga un buen fin de semana';
	} elseif ($dia == "Wed") {
		echo "Tenga un buen Miercoles! ";
	} 
	else {
		echo "Tenga un buen día";
	}
	 ?>
</body>
</html> 
""""
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional Else</title>
</head>
<body>
	<h1>Condicional Else</h1>
	<hr>

	<?php 
	$dia = date("D");
	if($dia == "Fri") {
		echo 'Tenga un buen fin de semana';
	} else {
		echo "Tenga un buen día";
	}
	 ?>
</body>
</html>
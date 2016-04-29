<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional Switch</title>
</head>
<body>
	<h1>Condicional Switch</h1>
	<hr>

	<?php 
	switch ("N") {
		case 1:
		echo "<h4> Feliz Lunes </h4>";
		break;
		case 2:
		echo "<h4> Feliz Martes </h4>";
		break;
		case 3:
		echo "<h4> Feliz Miercoles </h4>";
		break;
		case 4:
		echo "<h4> Feliz Jueves </h4>";
		break;
		case 5:
		echo "<h4> Feliz viernes </h4> ";
		break;
		case 6:
		echo "<h4> Feliz sabado </h4> ";
		break;
		default: 
		echo "<h4> Feliz Domingo </h4>";
		break;

	}
	?>
</body>
</html>
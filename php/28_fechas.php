<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fechas PHP</title>
</head>
<body>
	<h1>Fechas PHP</h1>
	<hr>
	<?php 

	   echo date('d-m-Y')."<br>";
	   echo date('d/m/y')."<br>";
	   echo date('z/w/Y')."<br>";
	   // Z: numero de dias hasta el dia de hoy
	   // W: numero de la semana
	   // L: 1-Si el año es bisiesto, 0- si no
	   echo date('z/w/L')."<br>";

	   echo date('j/n/L')."<br>";

	   echo date('d-m-Y h:i:s ')."<br>";

	   echo date('d-m-Y h:i:s A')."<br>";

	    echo date('r')."<br>";

	    echo date('r', '1519900000')."<br>";
	 ?>
	
</body>
</html>
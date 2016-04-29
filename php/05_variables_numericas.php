
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables de tipo númerico (PHP)</title>
</head>
<body>

	<h1>Variables de tipo númerico (PHP)</h1>
	<hr>

	<?php 

	$num1 = 10;
	$num2 = '20 ';
	$res = $num1 + intval($num2);
	$cantidad = 123456789;

	echo "<h3> La suma de 10 y 20  es  :  $res </h3>";

	echo "<br> La cantidad sin formato es: ".$cantidad;
	echo "<br> La cantidad con formato es: ".number_format($cantidad);

	?>
</body>
</html>
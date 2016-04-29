<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bucle While PHP</title>
</head>
<body>
	<h1>Bucle Dowhile PHP</h1>
	<hr>

	<?php 
	$num = 0;
	do {
	 	    $num++;
	 		if (($num % 2) != 0) {
	 			 echo  $num."<br>";
	
	 	}
	 } while ($num < 100);
	 
	 ?>
	
</body>
</html>


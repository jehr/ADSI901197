<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ventores Asociativos PHP</title>
</head>
<body>
	<h1>Ventores Asociativos PHP</h1>
	<hr>
	<?php 

	//
	$simpsons = array('Homero' => 44, 'Marge' => 38, 'Bart' => 10, 'Liza' => 9, 'Maggie' => 2 ); 

	$simpsons ['Poochie'] = 4;
	$simpsons ['Abraham'] = 94; 

	//Mostrar arreglo
	print (var_dump($simpsons));
	?>
	
</body>
</html>
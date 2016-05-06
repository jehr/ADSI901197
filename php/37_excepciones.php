<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excepciones</title>
</head>
<body>
	<h1>Excepciones</h1>
	<hr>
	<?php
	function verificarEdad($edad) {
		if($edad < 18) {
			throw new Exception("Usted es menor de edad");
		}
		return true;
	}
	try {
		verificarEdad(17);
		echo "Usted es mayor de edad";
	}
	catch(Exception $e) {
		echo "Mensaje: ".$e->getMessage();
	}
	?>
</body>
</html>
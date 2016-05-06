<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros PHP</title>
</head>
<body>
	<h1>Filtros PHP</h1>
	<hr>
	<form action="" method="post">
		<fieldset>
			<legend><h4>Datos</h4></legend>
		<input type="text" name="email" placeholder="Correo Electronico">
		<br>
		<input type="text" name="url" placeholder="Direccion de internet">
		<br>
		<input type="submit" value="Enviar">
		</fieldset>
	</form>

	<?php 

	if($_POST) {
 
    // Validar Correo Electronico
	if(!filter_has_var(INPUT_POST, 'email' )) {
		echo "El Campo Correo Electrónico no Existe";

	} else {
		
		if(!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
			echo "El Correo Electrónico <br>".$_POST ['email']." no es valido";
		}
		else {

			echo "El Correo Electrónico <br>".$_POST ['email']." es valido";
		}
	  }

	  echo "<br><br>";

	  // Validar ruta url
	  if(!filter_has_var(INPUT_POST, 'url' )) {
		echo "El Campo URL no Existe";

	} else {
		
		if(!filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
			echo "La ruta de internet <br>".$_POST ['url']." no es valida";
			echo "<br>";
			$url_limpia = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
			echo "La ruta de internet desinfectada es: ".$url_limpia ;
		}
		else {
			echo "La ruta de internet <br>".$_POST ['url']." es valida";
		}
	  }
	}
	
	 ?>
	 


</body>
</html>
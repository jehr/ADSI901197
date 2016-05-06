<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Correo Electronico</title>
</head>
<body>
	<h1>Correo Electronico</h1>
	<hr>
	<form method="post" action="">
		<fieldset>
		<strong>Correo:</strong><input type="text" name="email"><br>
		<strong>Asunto:</strong><input type="text" name="asunto"><br>
		<strong>Mensaje:</strong><textarea name="mensaje"></textarea><br>
		<input type="submit" value="Enviar">
		</fieldset>
	</form>
	<?php
	if($_POST) {
		$email = $_REQUEST['email'];
		$asunto = $_REQUEST['asunto'];
		$mensaje = $_REQUEST['mensaje'];
		
		if (mail("juanes010998@gmail.com", "Asunto: $asunto", $mensaje, "De: $email")) {
			echo "<h3>  El correo fue enviado : ".$_REQUEST['email']."</h3>";
		} else {
			echo "<h3>  El correo no se pudo enviar </h3>";
		}
		
		
	}
	?>
</body>
</html>
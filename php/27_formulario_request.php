<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Método REQUEST PHP</title>
</head>
<body>
	<h1>Formulario Método REQUEST PHP</h1>
	<hr>
	<form action="" method="post">
		<fieldset>
		<legend><h4>Datos Personales</h4></legend>
		<input type="text" name="nombre" placeholder="Nombre Completo">
		<br>
		<input type="number" name="edad" placeholder="Edad">
		<br>
		<input type="submit" value="Enviar ">
	    </fieldset>
	</form>
	
	<?php 

	   if(isset($_REQUEST['nombre']) && isset($_POST['edad'])) {
       echo "<li> El nombre es ".$_REQUEST['nombre']."</li>";
       echo "<li> La edad es ".$_REQUEST['edad']."</li>";
       }
	 ?>

</body>
</html>
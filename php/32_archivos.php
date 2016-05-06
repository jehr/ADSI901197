<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manejo de archivos PHP</title>
</head>
<body>
	<h1>Manejo de archivos PHP</h1>
	<hr>
	<?php  

          // Abrimos el archivo
	      $archivo1 = fopen('texto.txt', 'r') or exit('No se pudo abrir el archivo!');
	      $archivo2 = fopen('texto.txt', 'r') or exit('No se pudo abrir el archivo!');

          // Preguntar si ya alcanzo el final del archivo
	      while (!feof($archivo1)) 
	      { //Mostrar el texto linea a linea
	      	echo fgets($archivo1)."<br>";
	      }
	      echo "<br>";
	      while (!feof($archivo2)) 
	      { //Mostrar el texto linea a linea
	      	echo fgetc($archivo2)."-";
	      }

          // Cerramos el archivo
	      fclose($archivo1);
	      fclose($archivo2);
	 ?>
</body>
</html>
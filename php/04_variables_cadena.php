<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables de tipo Cadena PHP</title>
</head>
<body>
	<h1>Variables de tipo Cadena PHP</h1>
	<hr>

	<?php 

        $cadena1 = "Bienvenidos";
        $cadena2 = "ADSI 901197";
        
        // Se contatenan con (.)
        $concatenar = "<h2>".$cadena1." ".$cadena2."</h2>";
        echo $concatenar;

        //Longitus de Cadena
        echo "La longitud de la cadena es: ".strlen($concatenar);

        //Posicion de caracteres
        echo "<br> La posición de la palabra ADSI es: ".strpos($concatenar, "ADSI");

        // Minusculas
        echo "<br> La cadena en minusculas es: ".strtolower("Bienvenidos ADSI 901197");

         // Mayuscula
        echo "<br> La cadena en mayuscula es: ".strtoupper("Bienvenidos ADSI 901197");

        // Revertir cadena
        echo "<br> Revertir cadena: ".strrev("Bienvenidos ADSI 901197");

        // Reemplazr
        echo "<br> Reemplazar cadena: ".str_replace("ADSI", "Sena", "Bienvenidos ADSI 901197");

         // Intercambiar caracteres
        echo "<br> Intercambia caracteres de  cadena: ".str_shuffle( "Bienvenidos ADSI 901197");
	 ?>
</body>
</html>
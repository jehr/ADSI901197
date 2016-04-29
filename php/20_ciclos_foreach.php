<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo Foreach PHP</title>
</head>
<body>
	<h1>Ciclo Foreach PHP</h1>
	<hr>
	<?php


        $equipos = array('Once caldas', 'Nacional', 'Medellin', 'Pereira', 'Millonarios', 
	             'Santa Fe', 'Junior', 'Cali', 'America', 'Ibague');

        foreach ($equipos as $valor) {
        echo ("Los equipos colombianos son: ".	$valor)."<br>";
          }

    ?>
	
</body>
</html>

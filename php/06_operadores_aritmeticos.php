<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Aritmeticos PHP</title>
	<style>
	body{
		text-align: center;
	}
	table{
		border: 0px solid #7086B4;
		color: #000;
		height: 200px;
		width: 400px;
		cursor: pointer;
		margin-left: 500px;
		border-collapse: collapse;
		}
	

	td {
		border: 1px solid #7086B4;
		height: 50px;
		width: 100px;
	}
	
	#s1{
		background-color: #7086B4;
	}

	</style>
</head>
<body>
	<h1>Operadores Aritmeticos PHP</h1>
	<hr>

	<table>
		<tr>
			<td id="s1"><strong>Operador</strong></td>
			<td id="s1"><strong>Descripción</strong></td>
			<td id="s1"><strong>Ejemplo</strong></td>
			<td id="s1"><strong>Resultado</strong></td>
		</tr>

		<tr>
			<?php 
                $X = 2;  
		     ?>
			<td>+</td>
			<td>Adición</td>
			<td>X=2 <br> X+2 </td>
			<td>
               <?php echo $X+2; ?>
			</td>
		</tr>

		<tr>
			<?php 
                $X = 2;  
		     ?>
			<td>-</td>
			<td>Substracción</td>
			<td>X=2 <br> 5-X</td>
			<td>
				<?php echo 5-$X; ?>
			</td>
		</tr>

		<tr>

			<?php 
                $X = 4;  
		     ?>
			<td>*</td>
			<td>Producto</td>
			<td>X=4 <br> X*5 </td>
			<td>
				<?php echo $X*5; ?>
			</td>
		</tr>

		<tr>
			<td>/</td>
			<td>Division</td>
			<td>15/5</td>
			<td>
				<?php echo 15/5; ?>
			</td>
		</tr>

		<tr>
			<td>%</td>
			<td>Residuo</td>
			<td>5%2</td>
			<td>
				<?php echo 5%2; ?>
			</td>
		</tr>

		<tr>
			<?php 
                $X = 5;  
		     ?>
			<td>++</td>
			<td>Incremento</td>
			<td>X=5 <br> X++</td>
			<td>
				<?php echo $X++; ?>
			</td>
		</tr>

		<tr>
			<?php 
                $X = 5;  
		     ?>
			<td>--</td>
			<td>Decremento</td>
			<td>X=5 <br> X-- </td>
			<td>
				<?php echo --$X; ?>
			</td>
		</tr>
	</table>

	
</body>
</html>
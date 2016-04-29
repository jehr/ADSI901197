<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Logicos </title>
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
	<h1>Operadores Logicos PHP</h1>
	<hr>

	<table>
		<tr>
			<td id="s1"><strong>Operador</strong></td>
			<td id="s1"><strong>Ejemplo</strong></td>
			<td id="s1"><strong>Es igual que</strong></td>
			<td id="s1"><strong>Resultado</strong></td>
		</tr>
		<tr>
			<td>&&</td>
			<td>"Y"</td>
			<td>$x=6;<br>$y =3;<br>
				($x<10 && $y>1)</td>
				<td>
					<?php 
					$x = 6;
					$y = 3;
					echo var_dump($x<10 && $y>1);
					?>
				</td>
			</tr>
			<tr>
				<td>||</td>
				<td>"O"</td>
				<td>$x=6;<br>$y=3;<br>
					($x==5 || $y==5)</td></td>
					<td>
						<?php 
						$x = 6;
						$y = 3;
						echo var_dump($x==5 || $y==5); 	
						?>
					</td>
				</tr>
				<tr>
					<td>!</td>
					<td>"NO"</td>
					<td>$x=6;<br>$y =3;<br>
						!($x==$y)</td></td>
						<td>
							<?php 
							$x = 6;
							$y = 3;
							echo var_dump(!($x==$y));
							?>
						</td>
					</tr>
				</table>
			</body>
			</html>
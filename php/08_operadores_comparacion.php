<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Comparacion PHP</title>
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
	<h1>Operadores Comparacion PHP</h1>
	<hr>

	<table>
		<tr>
			<td id="s1"><strong>Operador</strong></td>
			<td id="s1"><strong>Ejemplo</strong></td>
			<td id="s1"><strong>Es igual que</strong></td>
			<td id="s1"><strong>Resultado</strong></td>
		</tr>

		<tr>
			
			<td>==</td>
			<td>Es igual</td>
			<td>5 == 8</td>
			<td>
               <?php echo var_dump(5==8); ?>
			</td>
		</tr>

		<tr>
			
			<td>+=</td>
			<td>x + = y</td>
			<td>x = 20+10</td>
			<td>
				<?php echo var_dump(5!=8); ?>
			</td>
		</tr>

		<tr>
            
			<td>-=</td>
			<td>x = - y</td>
			<td>x = 20-10 </td>
			<td>
				<?php echo var_dump(5<>8); ?>
			</td>
		</tr>

		<tr>
			
			<td>*=</td>
			<td>x *= y</td>
			<td>x = 20*10</td>
			<td>
				<?php echo var_dump(5>8); ?>
			</td>
		</tr>

		<tr>
			
			<td>/=</td>
			<td>x /= y</td>
			<td>x = 20/10</td>
			<td>
				<?php echo var_dump(5<8); ?>
			</td>
		</tr>

		<tr>
			
			<td>.=</td>
			<td>x .= y</td>
			<td>x = 20.10</td>
			<td>
				<?php echo var_dump(5>=8); ?>
			</td>
		</tr>

		<tr>
			
			<td>/=</td>
			<td>x /= y</td>
			<td>x = 20%10 </td>
			<td>
				<?php echo var_dump(5<=8); ?>
			</td>
		</tr>
	</table>

	
</body>
</html>
<html>
	<head>
		<h2> Tabuada </h2>
	</head>
		<body>
		
			<form method="post">		
				<input placeholder="Multiplicador" type="text" name="txNumero1" />
				<input placeholder="Valor Inicial" type="text" name="txNumero2" />
				<input placeholder="Valor Final" type="text" name="txNumero3" />
				
				<input type="submit" value="Calcular" />
	
			</form>
		
				<?php
			
				$mult = $_POST["txNumero1"];
				$i = $_POST["txNumero2"]; 
				$f= $_POST["txNumero3"]; 
			
				
				for($valor = $i; $valor <= $f; $valor++) {
				echo "$mult x $valor=";
				echo $mult*$valor;
				echo "<br>";
				}
				
				?>
			
			<p>
			<a href="index.php"> Home </a>
			</p>
			
		</body>
<html>
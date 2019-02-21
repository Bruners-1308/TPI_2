<html>
	<head>
		
	</head>
		<body>
		
			<form method="post">		
				<input placeholder="Multiplicador" type="text" name="txNumero1" />
				<input placeholder="Valor Inicial" type="text" name="txNumero2" />
				<input placeholder="Valor Final" type="text" name="txNumero3" />
				
				<input type="submit" value="Calcular" />
	
			</form>
		
				<?php
				
				/** $mult= $_POST["txNumero1"];
							
				for($i = 0; $i < 11; $i++) {
				echo "$mult x $i=";
				echo $mult*$i;
				echo "<br>";
				}
				
				**/
			
				$mult = $_POST["txNumero1"];
				$i = $_POST["txNumero2"]; 
				$f= $_POST["txNumero3"]; 
			
				
				for($valor = $i; $valor <= $f; $valor++) {
				echo "$mult x $valor=";
				echo $mult*$valor;
				echo "<br>";
				}
				
				?>
			
			
			
		</body>
<html>
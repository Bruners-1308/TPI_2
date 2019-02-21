<html>
	<head>
		
	</head>
		<body>
		
			<form method="post">		
				<input placeholder="Insira o número" type="text" name="txNumero1" />
								
				<input type="submit" value="Calcular" />
	
			</form>
		
				<?php
				
				$mult= $_POST["txNumero1"];
							
				for($i = 0; $i < 11; $i++) {
				echo "$mult x $i=";
				echo $mult*$i;
				echo "<br>";
				}
				?>
			
			
			
		</body>
<html>
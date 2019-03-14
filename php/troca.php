<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<h2> Troca de variável</h2>
  </head>
  <body>
  
	<form method="POST">

	<input placeholder="Variável A" type="text" name="txNum1" />  <br> <br> 
	<input placeholder="Variável B" type="text" name="txNum2" />	<br> <br> 
	<input type="submit" value="Trocar Valores" />
	</form>
 <br>
	
	
		<?php
		
			$a = $_POST["txNum1"];
			$b = $_POST["txNum2"];
			
			echo "<br>Variável A = $a <br> Variável B = $b"; 
			
			$b = $b - $a;
			$a = $b + $a;
			$b = $a - $b;

			echo "<br> Variável A = $a <br> Variável B = $b";
				
	?>
	
	<p>
		<a href="index.php"> Home </a>
	</p>

</body>
</html>
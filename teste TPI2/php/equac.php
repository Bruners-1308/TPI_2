<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<h2> Equaçação 2º Grau</h2>
  </head>
  <body>
  
	<form method="POST">

	<input placeholder="Coeficiente (A):" type="text" name="A" />  <br> <br> 
	<input placeholder="Coeficiente (B)" type="text" name="B" />	<br> <br> 
	<input placeholder="Termo (X)" type="text" name="X" />	<br> <br> 
	
	<input type="submit" value="Calcular" />
	</form>
 <br>
	
	
		<?php
		
			$a = $_POST["txNum1"];
			$b = $_POST["txNum2"];
		
			$b = $b - $a;
			$a = $b + $a;
			$b = $a - $b;

			echo "<br>a = $a <br>b = $b";
				
	?>
	
	<p>
		<a href="index.html"> Home </a>
	</p>

</body>
</html>
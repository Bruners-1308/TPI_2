<!DOCTYPE html>
<html lang="pt-br">
  <head>
   
  </head>
  <body>
	
	
	<form method="POST">

	<input placeholder="Digite o primeiro número" type="text" name="txNum1" />  <br> <br> 
	<input placeholder="Digite o segundo número" type="text" name="txNum2" />	<br> <br> 
	<input type="submit" value="Multiplicar" />
	</form>
 <br>
	
	<?php
	
	$num1 = $_POST["txNum1"];
	$num2 = $_POST["txNum2"];
		
		echo "$num1 x $num2 = " . $num1*$num2;
		echo "<br>";
	
?>

	<p>
		<a href="index.html"> Home </a>
	</p>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<h2> Reajuste de Salário </h2>
  </head>
  <body>
	
	
	<form method="POST">

	<input placeholder="Didite o valor do salário" type="text" name="txNum1" />  <br> <br> 
	<input placeholder="Digite o percentual de reajuste" type="text" name="txNum2" />	<br> <br> 
	<input type="submit" value="Valor reajustado" />
	</form>
 <br>
	
	<?php
	
	$salario = $_POST["txNum1"];
	$reajuste = $_POST["txNum2"];
		
	$perc = $reajuste / 100;
	$salreajust = $salario + ($salario * $perc);
	
	echo "Salário Reajustado: R$ ".number_format($salreajust);
	
	
?>
	<p>
		<a href="index.html"> Home </a>
	</p>
</body>
</html>
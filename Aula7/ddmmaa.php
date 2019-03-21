<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<h2> Troca de variável</h2>
  </head>
  <body>
  
	<form method="POST">

	<input placeholder="Dia" type="text" name="txNum1" />  <br> <br> 
	<input placeholder="Mês" type="text" name="txNum2" />	<br> <br> 
	<input placeholder="Ano" type="text" name="txNum3" />	<br> <br> 
	<input type="submit" value="Mostrar Data" />
	</form>
 <br>
	
	
		<?php
		
			$dia = $_POST["txNum1"];
			$mes[]= $_POST["txNum2"];
			$ano = $_POST["txNum3"];
			
			
			$ano [1] = "Janeiro";
			$ano [2] = "Fevereiro";
			$ano [3] = "Março";
			$ano [4] = "Abril";
			$ano [5] = "Maio";
			$ano [6] = "Junho";
			$ano [7] = "Julho";
			$ano [8] = "Agosto";
			$ano [9] = "Setembro";
			$ano [10] = "Outubro";
			$ano [11] = "Novembro";
			$ano [12] = "Dezembro";
		
			echo "$dia";
			echo "/";
			echo "[$mes]";
			echo "/";
			echo "$ano";
				
	?>

</body>
</html>
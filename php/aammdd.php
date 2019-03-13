<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<h2> Dias, meses, anos </h2>
  </head>
  <body>
  
	<form method="POST">

	<input placeholder="Digite a quantidade de dias" type="text" name="txNum1" />  <br> <br>  
	<input type="submit" value="Exibir" />
	</form>
 <br>
	
	
		<?php
		
			$userDias = $_POST["txNum1"];
			
			$ano = (int) $userDias/365;
			$mes = (int)($userDias % 365)/30;
			$dias = (int)($userDias % 365) % 30;
		
			echo "$userDias dias são: <br/>";
			echo "Anos: ".number_format ($ano);
			echo "<br/>";
			echo "Meses: ".number_format($mes);
			echo "<br/>";
			echo "Dias: " .number_format($dias);
		
	?>
	
	<p>
		<a href="index.php"> Home </a>
	</p>

</body>
</html>
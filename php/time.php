<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<h2> Troca de variável</h2>
  </head>
  <body>
  
	<form method="post">
		<input placeholder="Nome do Time 1" type="text" name="txtNumero1"/>
		<input placeholder="Numeros de gols Marcados"type="text" name="txtNumero2"/>
		</br>
		<input placeholder="Nome do Time 2"type="text" name="txtNumero10"/>
		<input placeholder="Numeros de gols Marcados"type="text" name="txtNumero15"/>
		</br>
		<input type="submit" value="Placar"/>
		</form>
	
	
		<?php
		
			$nome1 = $_POST["txtNumero1"];
			$gols1 = $_POST["txtNumero2"];
			$nome2 = $_POST["txtNumero10"];
			$gols2 = $_POST["txtNumero15"];
			 
			if ($gols1 > $gols2){
				echo "<p> Time Vencedor: $nome1</p>";
				echo "<p> Placar: $gols1</p>";	
				echo "<p> Time Perdedor: $nome2</p>";
				echo "<p> Placar: $gols2</p>";
			} 
			
			else if ($gols2 >$gols1){
				echo "<p> Time Vencedor: $nome2</p>";
				echo "<p> Placar: $gols2</p>";	
				echo "<p> Time Perdedor: $nome1</p>";
				echo "<p> Placar: $gols1</p>";
			} 
			else {
					 
				echo "<p> Empate</p>";
				echo "<p> Time: $nome1 | Placar: $gols1 </p>";
				echo "<p> Time: $nome2 | Placar: $gols2</p>";
			}
				
	?>
	
	<p>
		<a href="index.php"> Home </a>
	</p>

</body>
</html>
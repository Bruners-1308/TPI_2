<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<h2> Valor maior e Menor < > </h2>
  </head>
  <body>
  
	<form method="POST">

	<input placeholder="Valor 1" type="text" name="txNum1" />  <br> <br> 
	<input placeholder="Valor 2" type="text" name="txNum2" />	<br> <br> 
	<input placeholder="Valor 3" type="text" name="txNum3" />	<br> <br> 
	<input placeholder="Valor 4" type="text" name="txNum4" />	<br> <br> 
	<input placeholder="Valor 5" type="text" name="txNum5" />	<br> <br> 
	<input type="submit" value="Exibir" />
	</form>
 <br>
	
	
		<?php
		
			$a = $_POST["txNum1"];
			$b = $_POST["txNum2"];
			$c = $_POST["txNum3"];
			$d = $_POST["txNum4"];
			$e = $_POST["txNum5"];
			
			
			$x;
			
			echo "$a $b $c $d $e <br />";	
				
				if($a >= $b){
					$x = $a;
					$a = $b;
					$b = $x;					
				} 
				
				if($a >= $c){
					$x = $a;
					$a = $c;
					$c = $x;					
				} 
				
				if($a >= $d){					
					$x = $a;
					$a = $d;
					$d = $x;					
				} 
				
				if($a >= $e){
					$x = $a;
					$a = $e;
					$e = $x;					
				} 
				
				if($b >= $c){
					$x = $b;
					$b = $c;
					$c = $x;
				}
				
				if($b >= $d){
					$x = $b;
					$b = $d;
					$d = $x;
				}
				
				if($b >= $e){
					$x = $b;
					$b = $e;
					$e = $x;
				}
				
				if($c >= $d){
					$x = $c;
					$c = $d;
					$d = $x;
				}
				
				if($c >= $e){
					$x = $c;
					$c = $e;
					$e = $x;
				}
				
				if($d >= $e){
					$x = $d;
					$d = $e;
					$e = $x;
				}
				
				
				echo "$a $b $c $d $e";				
				
				echo "<br />Maior valor: $e";
				echo "<br />Segundo maior valor: $d";
				echo "<br />Menor valor: $a";
				echo "<br />Segundo Menor valor: $b";
				
	?>
	
	<p>
		<a href="index.php"> Home </a>
	</p>

</body>
</html>
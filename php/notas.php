<html>
	<head>
		<h2> Quantidade de notas </h2>
	</head>
		<body>
			
				<form method="POST">

				<input placeholder="Digite o Valor" type="text" name="txNum1" />  <br> <br> 

				<input type="submit" value="Exibir" />
				</form>
			 
			 <br>
		
				
			<?php
				
				$valor = $_POST["txNum1"];
				$cem;
				$cinquenta;
				$vinte;
				$dez;
				$cinco;
				$dois;
				
				echo "Valor R$ $valor <br>"  ;	
				
				if ($valor >=100){
					$cem = (int)($valor / 100);
					$valor = (int) $valor % 100;
				}
				
				if ($valor >=50){
					$cinquenta = (int) ($valor / 50);
					$valor = (int) $valor % 50; 
				}
				
				if ($valor >=20){
					$vinte = (int) ($valor / 20);
					$valor = (int) $valor % 20; 
				}
				
				if ($valor >=10){
					$dez = (int) ($valor / 10);
					$valor = (int) $valor % 10; 
				}
				
				if ($valor >=5){
					$cinco = (int) ($valor / 5);
					$valor = (int) $valor % 5; 
				}
				
				if ($valor >=2){
					$dois = (int) ($valor / 2);
					$valor = (int) $valor % 2; 
				}
				
				echo "Quantidade de notas de Cem: $cem <br>" ; 
				echo "Quantidade de notas de Cinquenta: $cinquenta <br>";
				echo "Quantidade de notas de Vinte: $vinte <br>";
				echo "Quantidade de notas de Dez: $dez <br>";
				echo "Quantidade de notas de Cinco: $cinco <br>";
				echo "Quantidade de notas de Dois: $dois <br>";
			
			?>
			
			<p>
			
			<a href="index.php"> Home </a>
			
			</p>
			
		</body>
</html>
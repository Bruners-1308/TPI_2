<html>
	<head>
		<style>
			.tit{
				color: #fff;
				font-size: 40px;
				background: #000;
			}
		</style>
	</head>
		<body>
		
			<p class="tit"> texto text </p>
  	
			<?php
				$numero1 = 8;
				$numero2 = 2;
				
				$resultado = $numero1 + $numero2;
				
				echo "$resultado";
				
				echo "Total: $resultado";
				
				echo "Total: " . $resultado;
				
				echo "<h1> Título </h1>";
				
				echo "<h1 class ='tit'> Texto </h1>";
				
				$idade = 2;
				if ($idade >=18){
					echo "Maior de idade";
				}
				else {
					echo "Menor de idade";
				}
			
				
			?>
		</body>
<html>
		
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Vetor</title>
  </head>
  
	<header>
	
			
	</header>
  
	<body>
	
		<?php
			
			/*
			$produtos [0] = "Açucar";
			$produtos [1] = "Azeite";
			$produtos [2] = "Arroz";
			
			$produtos= array ("Açucar", "Azeite", "Arroz");
			
			*/
			
			$produtos = ["Sal", "Azeite", "Arroz"];
			
			for ($i=0; $i<3; $i++){
				echo $produtos [$i]."<br />"; 
			}
		
		?>
	
		
	</body>
	
		
</html>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Médias</title>
	
		<style>
		
		.azul{
				color: #0000FF;
			}
			
			.vermelho{
				color: #FF0000;
			}
			
			</style>
  </head>
  
	<body>
		<h1>Notas</h1>
			<form method="post">		
				<input placeholder="1ª nota" type="text" name="txNumero1" />
				<input placeholder="2ª nota" type="text" name="txNumero2" />
				<input placeholder="3ª nota" type="text" name="txNumero3" />
				<input placeholder="4ª nota" type="text" name="txNumero4" />
				
				<input type="submit" value="Média" />
	
			</form>
			

			<?php
			
			
				$notaa = $_POST["txNumero1"];
				$notab = $_POST["txNumero2"];
				$notac = $_POST["txNumero3"];
				$notad = $_POST["txNumero4"];
				
				$resultado = ($notaa + $notab + $notac + $notad) /4;
				
				if ($resultado >=6){
						echo "<p class ='azul'> Aprovado com a nota: $resultado </p>";
					}
					else {
						echo  "<p class ='vermelho'> Reprovado com a nota: $resultado </p>";
					}
			
			
			?>
			
			<p>
				<a href="index.php"> Index </a>
			</p>
   
	</body>
</html>
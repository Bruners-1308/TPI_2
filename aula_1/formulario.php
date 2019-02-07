<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <title>Olá, mundo!</title>
  </head>
  <body>
    
	<h1> Exibir nome </h1>
	
	<form method="POST">		
		<input placeholder="Nome" type="text" name="txNome" />
		<input type="submit" value="Exibir" />
	</form>
	
	<?php 	
		$nome = $_POST["txNome"];		
		echo "$nome";	
	?>
	
	
	
	
	

    
  </body>
</html>
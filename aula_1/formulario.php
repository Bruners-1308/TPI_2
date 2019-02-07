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
		<input placeholder="1ª nota" type="text" name="txNome" />
		<input placeholder="2ª nota" type="text" name="txNome" />
		<input placeholder="3ª nota" type="text" name="txNome" />
		<input placeholder="4ª nota" type="text" name="txNome" />
		
		<input type="submit" value="Exibir Média" />
	</form>
	
	<?php 	
		$nome = $_POST["txNome"];		
		echo "$nome";		
		
		$notaa;
		$notab;
		$notac;
		$notad;
		
		echo "a média das notas é = " . (($notaa + $notab + $notac + $notad) /4 )  .  "<br />";
	?>
	
	
	
	
	

    
  </body>
</html>
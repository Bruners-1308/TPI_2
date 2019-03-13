<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href = "css\style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

	<header>
	<div class="logo">
			<figure>
				<img height="110px" src="imagens/logo.png" width="110px">
			</figure>
		</div>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="ecercicio1.php">Exercicio 1 <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="exercicio2php.php">Exercicio 2</a>
      <a class="nav-item nav-link" href="exercicio3.php">Exercicio 3 </a>
	  <a class="nav-item nav-link" href="exercicio4.php">Exercicio 4 </a>
	  <a class="nav-item nav-link" href="exercicio5.php">Exercicio 5 </a>
	  <a class="nav-item nav-link" href="exercicio6.php">Exercicio 6 </a>
	  <a class="nav-item nav-link" href="exercicio7.php">Exercicio 7 </a>
	  <a class="nav-item nav-link" href="exercicio8.php">Exercicio 8 </a>
      <a class="nav-item nav-link " href="exercicio9.php">Exercicio 9 </a>
	  
    </div>
  </div>
</nav>
		
	</header>
	<section>
	<p>
		6.	Criar um programa que leia o nome de 2 times e o número de gols marcados na partida (para cada time). Escrever o nome do vencedor. Caso não haja vencedor deverá ser impressa a palavra EMPATE.
	</p>
	
	 <form  method="POST">
   	
		<label for="time1">Nome do primeiro time:</label>
			<input type="text" placeholder="1 time" name="ti1" />
			<br>
		<label for="time1G">Gols do primeiro time:</label>
			<input type="text" placeholder="Gols 1 time" name="ti1g" />
			<br>		
		<label for="time2">Nome do segundo time:</label>
			<input type="text" placeholder="2 time" name="ti2" />
			<br>
		<label for="time1G">Gols do segundo time:</label>
			<input type="text" placeholder="Gols 2 time" name="ti2g" />
			<br>
		<button type="submit"> Enviar</button>

	</form>
<?php
		
		$ti1 = isset ($_POST['til'])? $_POST['til']: "";;
		$ti2 = isset ($_POST['ti2'])? $_POST['ti2']: "";
		$ti1g = isset ($_POST['tilg'])? $_POST['ti1g']: "";
		$ti2g = isset ($_POST['ti2g'])? $_POST['ti2g']: "";
		
		
		if ($ti1g > $ti2g){
			echo "Fim de jogo <br/>";
			echo $ti1."-".$ti1g." X ".$ti2g."-".$ti2."<br/>";
			echo $ti1." - VENCEDOR";
		}elseif ($ti2g > $ti1g){
			echo "Fim de jogo <br/>";
			echo $ti1."-".$ti1g." X ".$ti2g."-".$ti2."<br/>";
			echo $ti2." - VENCEDOR";
		}else {
			echo "Fim de jogo <br/>";
			echo $ti1."-".$ti1g." X ".$ti2g."-".$ti2."<br/>";
			echo " EMPATE ";
		}
		
?>
</section>
	
	
	
	<footer>
			<p id="cor">| 2019 Copyright | Gabriel - Luis - Thiago | Todos os direitos reservados 
			| </p>
	</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
  </body>
</html>
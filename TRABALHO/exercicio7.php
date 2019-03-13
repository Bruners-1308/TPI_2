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
		7.	Criar um programa que leia um valor numérico e seja exibido a menor quantidade de notas possível para o valor. Exemplo 587 – 5 notas de 100, uma nota de 50, uma nota de 20, uma nota de 10, uma nota de 5 e uma nota de 2.
	</p>
	 <form method="POST">
   	
		<label for="depos">Valor de deposito:</label>
			<input type="text" placeholder="Deposito" name="depos" />
			<br>
		<label for="retir">Retirada</label>
			<input type="text" placeholder="Retirada" name="retir" />
			<br>
		<button type="submit"> Enviar</button>

	</form>
<?php

$depos =isset ($_POST['depos'])? $_POST['depos']: "";
$retir = isset ($_POST['retir'])? $_POST['retir']: "";

if($retir <= $depos){
  do {
    $not100 = (int) $retir/100;
	$rest = $retir%100;
  } while ($not100 > 100);

  do {
    $not50 = (int) $rest/50;
	$rest1 = $rest % 50;
  } while ($rest > 50);

  do {
    $not20 = (int) $rest1/20;
	$rest2 = $rest1 % 20;
  } while ($rest1 > 20);

  do {
    $not10 = (int) $rest2/10;
	$rest3 = $rest2 % 10;
  } while ($rest2 > 10);

  do {
    $not5 = (int) $rest3/5;
	$rest4 = $rest3 % 5;
  } while ($rest3 > 5);

  do {
    $not2 = (int) $rest4/2;
	$rest5 = $rest4 % 2;
  } while ($rest4 > 2);

  do {
    $not1 = (int) $rest5/1;
	$rest6 = $rest5 % 1;
  } while ($rest5 > 1);


	echo "Valor em conta: R$ ".number_format($depos,2)."<br/>";
	echo "Valor de retirada: R$ ".number_format($_POST["retir"],2)."<br/>";
	echo "Foi retirado: <br/>";
	echo number_format($not100,0)." notas de 100. <br/>";
	echo number_format($not50,0)." notas de 50. <br/>";
	echo number_format($not20,0)." notas de 20. <br/>";
	echo number_format($not10,0)." notas de 10. <br/>";
	echo number_format($not5,0)." notas de 5. <br/>";
	echo number_format($not2,0)." notas de 2. <br/>";
	echo number_format($not1,0)." notas de 1. <br/>";
	}else{
		echo "SALDO INSUFICIENTE PARA RETIRADA!";
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
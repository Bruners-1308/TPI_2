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
<<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
	  <a class="nav-item nav-link" href="exercicio9.php">Exercicio 9 </a>
    
	  
    </div>
  </div>
</nav>
	</header>
	<section>
	<p>
	9.	Criar um programa que apresente os múltiplos de 3 do intervalo de 1 a 200
	</p>	
	</section>
	<?php
	  
	  for($i=1; $i<=200; $i++){
			if($i % 3 ==0){
				
				echo $i."<br/>";
			}
		}

	?>
	
	
	
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
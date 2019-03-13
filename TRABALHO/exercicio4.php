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
</nav>
	</header>
	<section>
	<p>	
		4.	Criar um programa de uma equação de segundo grau.
	</p>
	  <form method="POST">
   	
		<label for="a">Coeficiente principal (A):</label>
			<input type="text" placeholder="Coeficiente principal" name="a" />
			<br>
		<label for="b">Coeficiente secundario (B):</label>
			<input type="text" placeholder="Coeficiente secundÃ¡rio" name="b" />
			<br>		
		<label for="c">Termo independente (C):</label>
			<input type="text" placeholder="Termo independente" name="c" />
			<br>
		<button type="submit"> Enviar</button>

	</form>
<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];




$pot = pow($b,2);
$d = 4*$a*$c;


if($d < 0){
	$d *= -1;
	$res = $pot + $d;
	
	echo "Î” = bÂ² - 4.a.c <br/>";
	echo "Î” = $b Â² - 4.$a.$c <br/>";
	echo "Î” = $pot - - $d <br/>";
	echo "Î” = $res <br/>";
	
}else{
	$res = $pot - $d;
	
	echo "Î” = bÂ² - 4.a.c <br/>";
	echo "Î” = $b Â² - 4.$a.$c <br/>";
	echo "Î” = $pot - $d <br/>";
	echo "Î” = $res <br/>";
	
}
	
	echo "<br/> <br/> 2Â° passo: <br/> <br/>";
/* ------------------------------------------- */
	
	$etxt = "-b Â± âˆšÎ”";
	$ftxt = "2 * a";

	echo "&nbsp; &nbsp; &nbsp; $etxt";
	echo "<br/> x = ------------------ <br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $ftxt";

	if ($b < 0){
		
		if($res < 0){
			$l = $res *= -1;
			$i = sqrt($l);
		}else{
			$i = sqrt($res);
		}
		
		$g = "-($b)";
		$h = $b *= -1;
		$j = 2 * $a;
		
	echo "<br/><br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; $g  Â± âˆš $res";
	echo "<br/> x = -------------------- <br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2 * $a";
	echo "<br/> <br/><br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; $h Â± ";
	echo number_format($i,0);
	echo "<br/> x = -------------------- <br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $j";
		
	$m = ($h + $i) / $j;
	$n = ($h - $i) / $j;
	
	echo "<br/><br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; $h + $i";
	echo "<br/> x' = -------------------- <br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $j";
	echo "<br/> <br/>";
	echo "x' = ".number_format($m,0);;
	echo "<br/> <br/>";

	echo "<br/><br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; $h - $i";
	echo "<br/> x'' = -------------------- <br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $j";
	echo "<br/> <br/>";
	echo "x'' = ".number_format($n,0);;
	echo "<br/> <br/>";
		
		
	}else{
		
		if($res < 0){
			$l = $res *= -1;
			$i = sqrt($l);
		}else{
			$i = sqrt($res);
		}
		
		$g = $b *= -1;
		$j = 2 * $a;
	echo "<br/><br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; $g  Â± âˆš $res";
	echo "<br/> x = -------------------- <br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2 * $a";
	echo "<br/><br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; $g Â± ";
	echo number_format($i,0);
	echo "<br/> x = -------------------- <br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $j";
	
		
	$m = ($g + $i) / $j;
	$n = ($g - $i) / $j;
	
		
	echo "<br/><br/><br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; $g + ";
	echo number_format($i,0);
	echo "<br/> x' = -------------------- <br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $j";
	echo "<br/><br/>";
	echo "x' = ".number_format($m,0);
	echo "<br/> <br/>";

	echo "<br/><br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; $g - ";
	echo number_format($i,0);
	echo "<br/> x'' = -------------------- <br/>";
	echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $j";
	echo "<br/><br/>";
	echo "x'' = ".number_format($n,0);
	echo "<br/> <br/>";
		
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
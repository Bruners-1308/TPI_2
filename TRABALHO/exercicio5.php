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
</nav>
		
	</header>
	<section>
	<p>
		5.	Criar um programa que leia 5 valores e exiba: o maior valor, o menor valor, o segundo maior valor e o segundo menor valor.
	</p>
	<form method="POST">
   	
		<label for="var1">valor 1:</label>
			<input type="text" placeholder="valor 1" name="var1" />
			<br>
		<label for="var2">valor 2:</label>
			<input type="text" placeholder="valor 2" name="var2" />
			<br>
		<label for="var3">valor 3:</label>
			<input type="text" placeholder="valor 3" name="var3" />
			<br>
		<label for="var4">valor 4:</label>
			<input type="text" placeholder="valor 4" name="var4" />
			<br>
		<label for="var5">valor 5:</label>
			<input type="text" placeholder="valor 5" name="var5" />
			<br>
		<button type="submit"> Enviar</button>

	</form>
<?php
/*
$var1 = $_POST["var1"];
$var2 = $_POST["var2"];
$var3 = $_POST["var3"];
$var4 = $_POST["var4"];
$var5 = $_POST["var5"];


$val = (int) array();
$val[0] = $_POST["var1"];
$val[1] = $_POST["var2"];
$val[2] = $_POST["var3"];
$val[3] = $_POST["var4"];
$val[4] = $_POST["var5"];


var_dump($val);



$res1 = max(explode(', $','$var1, $var2, $var3, $var4, $var5'));
echo $$res1;


	if (var1 > var2){
		$Mvar6 = $var1;
	}else {
		$Mvar6 = $var2;
	}

	if ($Mvar6 > $var3){
		$Mvar7 = $Mvar6;
	}else{
		$Mvar7 = $var3;
	}

	if ($Mvar7 > $var4){
		$Mvar8 = $Mvar7;
	}else{
		$Mvar8 = $var4;
	}

	if ($Mvar8 > $var5){
		$Mvar9 = $Mvar8;
	}else {
		$Mvar9 = $var5;
	}
*/



/*
	echo max($val[0],$val[1],$val[2],$val[3],$val[4]);
	echo "<br/>";
    echo min($val[0],$val[1],$val[2],$val[3],$val[4]);
	
	echo "<br/>";
	*/
	
	$v = array($_POST["var1"],$_POST["var2"],$_POST["var3"],$_POST["var4"],$_POST["var5"]);
	
	sort ($v);
	foreach ($v as $n){
		echo "&nbsp; &nbsp;".$n;
	}
	
	echo "<br/> <br/>";
	echo "O maior valor é: ".$v[4].", e o segundo maior é ".$v[3]."<br/>";
	echo "<br/> <br/>";
	echo "O menor valor é: ".$v[0].", e o segundo menor é ".$v[1]."<br/>";

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
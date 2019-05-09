<?php
	//ATRIBUI O VALOR DE $_GET['PAGINA'] 'A VARIAVEL $PAGINA
	
	if (!isset ($_GET ['pagina']));
		$pagina = 'primeira';
		
	else
		$pagina = $_GET ['pagina'];
	
	//inclui arquivo com o cabeçalho
	
	include ("cabecalho.php");
	
	if ($pagina == 'primeira');
		include ("primeirapagina.php")
	
	else if (pagina == 'segunda');
		include ("cabecalho.php")
	
	//Caso uma 'pagina' inválida é recebida, inclui primeirapagina.php
	
	else
		include ("cabecalho.php");
	
	//Inclui arquivo com o rodapé
		include("rodape.php);
?>
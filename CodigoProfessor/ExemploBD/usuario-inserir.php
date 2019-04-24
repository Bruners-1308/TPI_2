<?php
	
	//$nome = isset($_POST['txNome'])? $_POST['txNome'] :'';
	$nome = "Tereza";
	$senha = "555333";
	

	require('conexao.php');
	
	try {		
		$stmt = $pdo->prepare("INSERT INTO tbLogin VALUES(null,'2019-03-01','$nome','$senha')");		
		$stmt->execute();				 				 		
		$stmt = null;
		
		
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}

?>
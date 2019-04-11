<?php	

	require('conexao.php');
	
	$usuario = isset($_POST['txUser'])? $_POST['txUser'] :'';
	$senha = isset($_POST['txSenha'])? $_POST['txSenha'] :'';
	
	
	try {		
		$stmt = $pdo->prepare("INSERT INTO tbLogin VALUES(null,'2019-04-10','$usuario','$senha')");		
		$stmt->execute();				 				 		
		$stmt = null;
		$pdo = null;
		
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}
	
	
	
	
	
	
	
	
	
	

?>
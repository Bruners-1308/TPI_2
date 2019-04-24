<?php
	
	$idExcluir=$_GET['idUsuario'];

	require('conexao.php');
	
	try {		
		$stmt = $pdo->prepare("delete from tbLogin where idLogin=$idExcluir");		
		$stmt->execute();				 				 		
		$stmt = null;		
		header('Location: index.php');
		
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}

?>
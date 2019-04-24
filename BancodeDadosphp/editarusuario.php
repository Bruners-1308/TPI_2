
  <?php	
  
    $idEditar=$_GET['id'];
	require('conexao.php');
	
	$usuario = isset($_POST['senha'])? $_POST['usuario'] :'';
	$senha = isset($_POST['senha'])? $_POST['senha'] :'';
	
	
	try {		
		$stmt = $pdo->prepare("update bdAppointment.tbLogin set Usuario = '$usuario',Senha = '$senha' where idLogin=$idEditar");		
		$stmt->execute();				 				 		
		$stmt = null;
		$pdo = null;
	
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}
	
	
		


?>
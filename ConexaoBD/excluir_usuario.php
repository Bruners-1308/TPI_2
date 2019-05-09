<?php
   $idExcluir=$_GET['idUsuario'];
  require("conexao.php");
  
  try{
	  $stmt = $pdo->prepare("delete from tbCadastro where idContato=$idExcluir");
	  $stmt ->execute();
	  $stmt = null;
	  header('Location: tabela_usuarios.php');
	  
  }catch(PDOException $e){
	  echo 'Error: ' . $e->getMessage();
  }
?>
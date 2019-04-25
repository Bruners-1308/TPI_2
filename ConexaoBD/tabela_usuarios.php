	<header>
		<?php require("cabecalho.php")  ?>
	</header>
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">data do Cadastro</th>
      <th scope="col">Nome do Usuário</th>
      <th scope="col">e-mail</th>
      <th scope="col">Senha</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir Usuario</th>
    </tr>
  </thead>
  <tbody>
	
	
	<section>		
			


<?php 

	require("conexao.php");


		$consultaLogin = $pdo->query("SELECT * FROM tbCadastro;");
			while ($resultTbCadastro = $consultaLogin->fetch(PDO::FETCH_ASSOC)){
				
				echo"<tr>";
                   echo"<th scope='row'>{$resultTbCadastro['idContato']}</th>";
                   echo"<td>{$resultTbCadastro['dtCadastro']}</td>";
                   echo"<td>{$resultTbCadastro['nome']}</td>";
				   echo"<td>{$resultTbCadastro['email']}</td>";
                   echo"<td>{$resultTbCadastro['senha']}</td>";
				   echo "<td><a href='?id=$resultTbCadastro[idContato]&usuario=$resultTbCadastro[nome]&senha=$resulTbCadastro[senha]'>Editar</a></td>";
				   
				   echo "<td><a href='excluir_usuario.php?idUsuario=$resultTbCadastro[idContato]'>Excluir</a></td>";
				   
                 echo "</tr>";
				
				/*echo "<p>";
				 echo "{$resultTbLogin['dtCadastro']}";
			echo "{$resultTbLogin['Usuario']}";
				
				echo "</p>";*/

				
			}
				
			$pdo=null;
?>
 </tbody>
</table>

</section>
	<footer><?php require("rodape.php")  ?></footer>
	
    
	
 
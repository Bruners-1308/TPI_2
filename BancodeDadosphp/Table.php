	<header>
		<?php require("Cabecalho.php")  ?>
	</header>
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">data do Cadastro</th>
      <th scope="col">Usuario</th>
      <th scope="col">Senha</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir Usuario</th>
    </tr>
  </thead>
  <tbody>
	
	
	<section>
	<section>			
				<h1>update no banco de dados </h1>			
			</section>			
			
			<section>
				
				<form method="post" action="editarusuario.php">
				<input type="text name="id"  value="<?php echo @$_GET['id']; ?>" />
					<input type="text" name="usuario" maxlength="40" placeholder="Usuario" value="<?php echo @$_GET['usuario']; ?>" />
					<input type="text" name="senha" placeholder="Senha" value="<?php echo @$_GET['senha']; ?>" />
					<input type="submit" value="Salvar" />				
				</form>			
				
			</section>		
			


<?php 

	require("conexao.php");


		$consultaLogin = $pdo->query("SELECT * FROM bdAppointment.tbLogin;");
			while ($resultTbLogin = $consultaLogin->fetch(PDO::FETCH_ASSOC)){
				
				echo"<tr>";
                   echo"<th scope='row'>{$resultTbLogin['idLogin']}</th>";
                   echo"<td>{$resultTbLogin['dtCadastro']}</td>";
                   echo"<td>{$resultTbLogin['Usuario']}</td>";
                   echo"<td>{$resultTbLogin['Senha']}</td>";
				   echo "<td><a href='?id=$resultTbLogin[idLogin]&usuario=$resultTbLogin[Usuario]&senha=$resultTbLogin[Senha]'>Editar</a></td>";
				   
				   echo "<td><a href='excluirusuario.php?idUsuario=$resultTbLogin[idLogin]'>Excluir</a></td>";
				   
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
	<footer><?php require("Rodape.php")  ?></footer>
	
    
	
 
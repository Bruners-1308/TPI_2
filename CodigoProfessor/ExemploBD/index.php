<html>
	<head>
		<meta charset="utf-8" />
	</head>
		<body>
			
			<section>			
				<h1> Exemplo Consulta com banco de dados </h1>			
			</section>
			
			<section>
				
				<form method="get" action="usuario-alteracao.php">
					<div>
						<input type="hidden" name="id" value="<?php echo @$_GET['id']; ?>" />
						<input type="text" placeholder="Usuário" name="usuario" value="<?php echo @$_GET['usuario']; ?>" />
						<input type="text" placeholder="Senha" name="senha" value="<?php echo @$_GET['senha']; ?>" />
						<input type="submit" value="Salvar" />
					</div>
					
					
				</form>
				
			</section>
			
			
			
			<section>

				<?php
					require('conexao.php');
					
					$consultaLogin = $pdo->query("SELECT * FROM tbLogin;");
					
					while ($resultTbLogin = $consultaLogin->fetch(PDO::FETCH_ASSOC)) {													
						echo "<p>";
							echo "{$resultTbLogin['idLogin']} ";
							echo "{$resultTbLogin['dtCadastro']} ";		
							echo "{$resultTbLogin['usuario']} ";		
							echo "{$resultTbLogin['senha']} ";
							echo "<a href='?id=$resultTbLogin[idLogin]&usuario=$resultTbLogin[usuario]&senha=$resultTbLogin[senha]'>";
								echo "Editar"; 
							echo" </a>";
							echo "<a href='usuario-excluir.php?idUsuario=$resultTbLogin[idLogin]'> Excluir </a>";							
							
						echo "</p>";
					}

					$pdo = null;	
				?>
			</section>		
			
		</body>
</html>
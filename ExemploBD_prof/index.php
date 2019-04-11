<html>
	<head>
		<meta charset="utf-8" />
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  
		
	</head>
		<body>
			
			<section>			
				<h1> Exemplo Consulta com banco de dados </h1>			
			</section>			
			
			<section>
			
				<table class="table table-striped">
				  <thead>
					<tr>
					  <th scope="col"> # </th>
					  <th scope="col"> Data do cadastro</th>
					  <th scope="col"> Usuário </th>
					  <th scope="col"> Senha </th>
					</tr>
				  </thead>
				  <tbody>

						<?php
							require('conexao.php');
							
							$consultaLogin = $pdo->query("SELECT 
								idLogin,dtCadastro,usuario,senha
							 FROM tbLogin;");
							
							while ($resultTbLogin = $consultaLogin->fetch(PDO::FETCH_ASSOC)) {													
								echo "<tr>";
								  echo "<th scope='row'> {$resultTbLogin['idLogin']} </th>";
								  echo "<td> {$resultTbLogin['dtCadastro']} </td>";
								  echo "<td> {$resultTbLogin['usuario']} </td>";
								  echo "<td> {$resultTbLogin['senha']} </td>";
								echo "</tr>";							
							}

							$pdo = null;	
						?>
				
					</tbody>
				</table>
				
			</section>		
			
		</body>
</html>
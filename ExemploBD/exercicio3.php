<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
		<body>
			
			<section>			
				<h1> Exemplo Consulta com banco de dados </h1>			
			</section>
			
			
			
			<section>

				<?php
					require('conexao.php');
					
					$consultaLogin = $pdo->query("SELECT * FROM tbLogin;");
					
					while ($resultTbLogin = $consultaLogin->fetch(PDO::FETCH_ASSOC)) {													
						echo "<p>";
							echo "{$resultTbLogin['dtCadastro']} ";		
							echo "{$resultTbLogin['Usuario']} ";			
						echo "</p>";
					}

					$pdo = null;	
				?>
			</section>		
			
		</body>
</html>
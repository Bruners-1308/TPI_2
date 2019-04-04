<html>
	<head>
		<meta charset="utf-8" />
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
							echo "{$resultTbLogin['usuario']} ";		
						echo "</p>";
					}

					$pdo = null;	
				?>
			</section>		
			
		</body>
</html>
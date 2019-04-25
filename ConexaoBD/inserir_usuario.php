<html>
	<head>
		<meta charset="utf-8" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	
		
		<section>

			<?php
				require('cabecalho.php');
						
			?>
		</section>	
			
		
			
		<body>
			<section>
			
				<?php	

					require('conexao.php');
					
					$nome = isset($_POST['nome'])? $_POST['nome'] :'';
					$email = isset($_POST['email'])? $_POST['email'] :'';
					$senha = isset($_POST['senha'])? $_POST['senha'] :'';
					
					
					try {		
						$stmt = $pdo->prepare("INSERT INTO tbCadastro VALUES(null, curdate(),'$nome','$email','$senha')");		
						$stmt->execute();				 				 		
						$stmt = null;
						$pdo = null;
						
					}catch(PDOException $e) {
						echo 'Error: ' . $e->getMessage();
					}
	
			?>
				
			</section>
			
			<div class="alert alert-primary" role="alert">
				Cadastro efetuado com sucesso
			</div>
			
			<section>

			<?php
				require('rodape.php');
						
			?>
		</section>	
			
			
		</body>
</html>



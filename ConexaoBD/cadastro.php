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
			
			
				<form method ="post" action ="inserir_usuario.php">
				  <div class="form-group">
					<label for="nome">Insira seu nome</label>
					<input type="text" class="form-control" name="nome" placeholder="Nome Completo">
				  </div>
				  
				  <div class="form-group">
					<label for="email">Insira seu e-mail</label>
					<input type="email" class="form-control" name="email" placeholder="Digite seu e-mail de login">
				  </div>
				  				  
				  <div class="form-group">
					<label for="senha">Insira sua senha</label>
					<input type="password" class="form-control" name="senha" maxlength="8" placeholder="Senha">
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</section>
			
			<section>

			<?php
				require('rodape.php');
						
			?>
		</section>	
			
			
		</body>
</html>


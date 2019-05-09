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
			
				<form>
				  <div class="form-group">
					<label for="exampleInputEmail1">Endereço de email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
					<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
				  </div>
				  
				  <div class="form-group">
					<label for="exampleInputPassword1">Senha</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
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
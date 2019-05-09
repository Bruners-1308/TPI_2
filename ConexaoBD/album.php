<html>
	<head>		
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			
		<style>
			.sec-x{
				max-width:70%;
				width:100%;
				display:table;
				margin: 0 auto;				
			}
		</style>
	
	</head>
		<body>
		
			<section class="sec-x">
				<div>
					<h1> Álbuns Michael Jackson </h1>
				</div>				
				
				<div>					
					<?php
					require('conexao.php');
					
					$consultatbAlbum = $pdo->query("SELECT * FROM tbAlbum;");
					
					while ($x = $consultatbAlbum->fetch(PDO::FETCH_ASSOC)) {
							
							echo "	<div class='card' style='width: 18rem; float:left; margin: 0px 2%;'>
									  <img class='card-img-top' src='{$x['caminhoImg']}' alt='Imagem de capa do card'>
									  <div class='card-body'>
										<span> {$x['dt']} </span>
										<h5 class='card-title'> {$x['titulo']} </h5>
										<p class='card-text'>
											{$x['resumo']}
										</p>
										<a href='conteudo_album.php?idemNoticia={$x['idAlbum']}' class='btn btn-primary'> Leia mais </a>
									  </div>
									</div>";																				
					}

					$pdo = null;	
				?>
				</div>			
			</section>		
		</body>	
</html>
<html>
	<head>
		
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<style>
			.topo-interna{
				background:#00f;				
			}
			
			.topo-interna h1{
				font-size:2.6em;
				color:#fff;
				text-align:center;
				padding: 5% 0%;
				
			}
			
			.div-content{
				margin: 0 auto;
				display:table;				
				width:100%;
				max-width:70%;
				background:#ccc;
			}
			
		</style>
		
		
	</head>
		<body>
		
			<section class="sec-x">
				
				<div>
					
					<?php
					
					$id = $_GET['idemNoticia'];
					
					
					require('conexao.php');
					
					$consultaTbX = $pdo->query("SELECT * FROM tbAlbum where idAlbum= $id;");
					
					while ($x = $consultaTbX->fetch(PDO::FETCH_ASSOC)) {
						echo "<div class='topo-interna'>";					
							echo "<h1> {$x['titulo']} </h1>";						
						echo "</div>";					
						
						echo "<div class='div-content'>";
							echo "<span> Data:{$x['dt']} </span>";
						
							echo "<p>";						
								echo "{$x['conteudo']}";						
							echo "</p>";
						
						echo "</div>";
					}

					$pdo = null;	
				?>
					
					
				
				
				
				</div>
				
				
				
			</section>
			
			
			
		</body>	
</html>
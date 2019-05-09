<?php
	$erro = 0;	
	
	
	
	if(isset($_FILES["txImg"])){
		$arqNome = $_FILES["txImg"]["name"];
		$arqTipo = $_FILES["txImg"]["type"];
		$arqTamanho = $_FILES["txImg"]["size"];
		$arqNomeTemp = $_FILES["txImg"]["tmp_name"];
		$erro = $_FILES["txImg"]["error"];
		
		if($erro==0){
			if(is_uploaded_file($arqNomeTemp)){
				if(move_uploaded_file($arqNomeTemp,"images/". $arqNome)){
					echo "Sucesso!";
					require('conexao.php');
					$nome = isset($_POST['txNome'])? $_POST['txNome'] :'';														
					$caminho = 'images/'. $arqNome;
					$resumo = isset($_POST['txResumo'])? $_POST['txResumo'] :'';
					$conteudo = isset($_POST['txConteudo'])? $_POST['txConteudo'] :'';

				try {
					//Linha SQL	
					$stmt = $pdo->prepare("INSERT INTO tbAlbum VALUES(null,'2019-05-08','$nome','$caminho','$resumo','$conteudo')");		
					$stmt->execute();				 				 
					
					
					echo ("<script>
							window.alert('Banda cadastrada com sucesso!');
							window.location.href='cadastro_banda.php';			
						   </script>"
						 );							
					
				}catch(PDOException $e) {
					echo 'Error: ' . $e->getMessage();
				}									
			}
			else{
				$erro = "Falha ao mover o arquivo";
			}
			}
			else{
				$erro = "Erro no envio: arquivo não recebido com sucesso.";
			}
			
		}
		else{
			$erro = "Erro no envio: " . $erro;			
		}
						
	}
	else{
		$erro = "Arquivo enviado não encontrado";
	}
	
	if($erro!==0){
		
		echo ("<script>
					window.alert('Erro: $erro;');
					window.location.href='cadastro_banda.php';			
				</script>"
			);
		
		
	}			
?>	
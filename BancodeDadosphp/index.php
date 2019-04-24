<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<header>
		<?php require("Cabecalho.php")  ?>
	</header>
	<section>			
				<h1>update no banco de dados </h1>			
			</section>			
			
			<section>
				
				<form method="post" action="editarusuario.php">
					<input type="text" name="txUser" maxlength="40" placeholder="Nome" required />
					<input type="password" name="txSenha" placeholder="Senha" required />
					<input type="submit" value="Salvar" />				
				</form>			
				
			</section>		
			

<?php 
    
echo"<h1>Fazer uma consulta que exiba apenas os dados de cadastro e nome de usuário da tabela login</h1>";
	require("conexao.php");

       
 
 
		$consultaLogin = $pdo -> query("SELECT * FROM bdAppointment.tbLogin;");
			while ($resultTbLogin = $consultaLogin->fetch(PDO::FETCH_ASSOC)){
				echo "<p>";
				
				echo "{$resultTbLogin['dtCadastro']} <br>";
				echo "{$resultTbLogin['Usuario']}<br><br> ";
				
                
				
                echo "</p";
}

$pdo=null;
?>
</body>
<footer><?php require("Rodape.php")  ?></footer>

</html>


 <style>
            h1{
            margin: 1em;
                
            }
             p{
             margin:1em;
             }
        </style>
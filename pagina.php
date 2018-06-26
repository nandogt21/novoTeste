<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
                    <script>alert("Logado com Sucesso!")</script>  

		
		<h1>Cadastrar localizaçao</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa2.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="nome"><br><br>
			
			<label>Telefone: </label>
                        <input type="cod" name="cod" placeholder="TElefone"><br><br>
                        <label>Email Google:</label>
                        <input type="text" name="descriçao" placeholder="Email"><br><br>
                        <input type="submit" value="Cadastrar"><br>
                        
                        <iframe
          width="500"
          height="400"
          frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCGQj3pMaaZa7Bqt5Q3z1ezBH5Lhm_8mXE
          &q=Brasilia+DF" allowfullscreen>
                        </iframe>
		</form>
	</body>
</html>

    
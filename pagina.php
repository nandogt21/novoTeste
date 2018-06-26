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
			<label>Endereço : </label>
			<input type="text" name="nome" placeholder="Endereço"><br><br>
			
			<label>Longitude: </label>
                        <input type="cod" name="cod" placeholder="Longitude"><br><br>
                        <label>Altitude:</label>
                        <input type="text" name="descriçao" placeholder="Altitude"><br><br>
			<input type="submit" value="Cadastrar">
                        
                        <iframe>
                            wigth:
                            heigth:
                            src="" 
                            
                        </iframe>
		</form>
	</body>
</html>

    
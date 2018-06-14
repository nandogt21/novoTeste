<?php
include_once ("conexao.php");


$usuario= $_POST['usuario'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];        
$senha=$_POST['senha'];
$sql="insert into usuarios(usuario,email,telefone,senha)values('$usuario','$email','$telefone','$senha')";
$salvar= mysqli_query($conexao,$sql);
mysqli_close($conexao);


?>


<?php
session_start();
include_once("conexao.php");
$usuario= filter_input(INPUT_POST,'usuario',FILTER_SANITIZE_STRING);
$senha= filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$telefone= filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_NUMBER_INT);

//echo"usuario: $usuario<br>";
//echo"senha: $senha<br>";
//echo"email: $email<br>";
//echo"telefone: $telefone<br>";

$result_usuario="INSERT INTO usuarios(usuario,senha,email,telefone) VALUES('$usuario','$senha','$email' ,'$telefone')";
$resultado_usuario=mysqli_query($conexao,$result_usuario);

if(mysqli_insert_id(conexao)){
    $_SESSION['msg']="<p style='color:green;'>Usuario Cadastrado com Sucesso</p>";
    header("location:tela.php");
   }
   else{
       header("location:tela.php");
   }
?>



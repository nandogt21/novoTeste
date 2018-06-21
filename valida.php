<?php>
  $nome_servidor="localhost";
$login="root";
$password="";
$database="cadastro";
$conexao= mysqli_connect($nome_servidor,$login,$password,$database);
if($conexao->connect_error) {
 die("Conexão falhou: " . $conecta->connect_error."<br>");
 }
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  /*$senha = md5($_POST['senha']);*/
 
             
      $verifica = mysqli_query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
            $_SESSION["usuario"]=$usuario;
            $_SESSION["senha"]=$senha;
            header("index.php");
            
        }
    }
    ?>
<?php>
  $usuario = $_POST['usuario'];
  $enviar = $_POST['enviar'];
  $senha = md5($_POST['senha']);
  $conexao = mysql_connect('localhost','root','');
  $db = mysql_select_db('cadastro');
    if (isset($enviar)) {
             
      $verifica = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("usuario",$usuario);
          header("");
        }
    }
    ?>
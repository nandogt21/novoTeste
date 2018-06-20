<?php
include_once("conexao.php");
mysqli_select_db($banco);
?>
<html> 
    <head>
        <title>autenticando</title>
        <script type="text/javascript">
            function loginsucesso(){
    setTimeout("window.location='painel.php'",2000);        
    }
    function loginfalhou(){
       setTimeout("window.location='index.php'",2000);
    }
    </head>
    <body>
<?php
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$sql=mysql_query ("SELECT * FROM usuarios WHERE usuario='$usuario' and senha='$senha'") or die(mysql_error());

$row=mysql_num_rows($sql);
if($row>0){
    session_start();
    $_SESSION['usuario']=$_POST['usuario'];
    $_SESSION['senha']=$_POST['senha'];
    echo"<center>voce foi atenticado com sucesso!</center>";
    echo "<script>loginsucesso</script>";
    
   } else{
       echo"<center>voce foi atenticado com sucesso!</center>";
       echo"faliu";
   }
   
?>
    </body>
</html>

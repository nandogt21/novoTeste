<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>phoneLocation</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <style type="text/css">
        body{
     background:url(mundo.png);
    }
    #pagina{
        position:absolute;
        font-size:450%;
        color:white;
        left:36%;
        top:10%;
           
    }
    #Usuario-login{
position:absolute;
left:42%;
top:20%;
color:white;
font-family:Comic Sans MS, Comic Sans, cursive;
    }
    #Senha-login{
    position:absolute;
    left:43%;
    top:40%;
    color:white;
    font-family:Comic Sans MS, Comic Sans, cursive; 
    
}
    #facalogin{
    position:absolute;
        font-size:250%;
        color:white;
        left:25%;
        top:5%;
        font-family:Comic Sans MS, Comic Sans, cursive;
    }
       #login-box-interno{
           width:440px;
           height:290px;
           top:200px;
           left:200px;
           position:absolute;
           background-color:#121212;
           margin:140px auto 0 px;
           border-radius:5px;
           box-shadow:5px 5px 5px 5px black;
           overflow:hidden;
           opacity:.9;
      }
       #cadastro{
           position:absolute;
           left:70%;
           top:85%
          }
          #caixa-cadastro{
          
          width:400px;
           height:550px;
           top:80px;
           left:800px;
           position:absolute;
           background-color:#121212;
           margin:100px auto 0 px;
           border-radius:5px;
           box-shadow:5px 5px 5px black;
           opacity:.9;
          
      }
      #Usuario-cadastro{
          position:absolute;
          color:white;
          
      }
      #Senha-cadastro{
          position:absolute;
          color:white;
       }
       #Email-cadastro{
           position:absolute;
          color:white;
       }
       #Telefone-cadastro{
           position:absolute;
           color:white;
       }  
       #barra-do-usuario{
           
       }
       #barra-da-senha{
           
       }
       #barra-do-email{
           
       }
       #barra-do-telefone{
       
       }
      
    </style>
    <body>
        <div id="pagina"><center>PhoneLocation</center></div>
        
        <div id="login-box-interno">
            <div id ="facalogin">Faça o Login</div>
    <form action="receber" method="post">
        <h3 id="Usuario-login">Usuario:<h3><input type="text" id="escrever" size="20"><br><br>
       <h3 id="Senha-login">Senha:</h3><input type="password" id="senha1" size="20">
    <input type="button" value="ENVIAR" id="enviar" size="15">
    <input type="button" value="CANCELAR" id="cancelar" size="15">
    
</form>
            
       
        </div>
        <div id="caixa-cadastro">
            <div id="facalogin">Faça Seu Cadastro !</div>
            <form>
                <h3 id="Usuario-cadastro">Usuario:</h3><input type="text" value=usuario" id="barra-do-usuario" size="25" >
                <h3 id="Senha-cadastro"> Senha:</h3><input type="text" value="senha" id="barra-da-senha" size="25" >
                <h3 id="Email-cadastro">Email:</h3><input type="text" value="email" id="barra-do-email" size="25" >
                <h3 id="Telefone-cadastro">Telefone:</h3><input type="text" value="telefone" id="barra-do-telefone" size="25" >
                <input type="button" value="GRAVAR" size="15">
                <input type="button" value="LIMPAR" size="15">
            </form>
        </div>
        
    </body>
</html>

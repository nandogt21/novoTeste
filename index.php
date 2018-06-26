

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
        left:20%;
        top:10%;
        text-shadow:2px 1px 2px red;
           
    }
    #gravar{
     position:absolute;
    left:27%;
    top:65%;
}
#limpar{
     position:absolute;
    left:57%;
    top:65%;
    
     
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
        font-size:200%;
        color:white;
        left:28%;
        top:3%;
        font-family:Comic Sans MS, Comic Sans, cursive;
    }
     #facacadastro{
    position:absolute;
        font-size:200%;
        color:white;
        left:15%;
        top:3%;
        font-family:Comic Sans MS, Comic Sans, cursive;
    }
    #gps{
        position:absolute;
        left:14%;
        top:11%;
        
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
           top:85%;
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
          left:10%;
          top:15%;
          
          
          
          
          
      }
      #Senha-cadastro{
          position:absolute;
          color:white;
          left:10%;
          top:24%;
       }
       #Email-cadastro{
           position:absolute;
          color:white;
          left:10%;
          top:33%;
             
       }
       #Telefone-cadastro{
           position:absolute;
           left:10%;
           color:white;
           top:42%;
       }  
       #barra-do-usuario{
           position:absolute;
          left:33%;
          top:19%;
          height:22px;
             
           
       }
       #barra-da-senha{
           position:absolute;
           left:30%;
          top:27%;
          height:22px;
       }
       #barra-do-email{
           position:absolute;
           left:30%;
           top:36%;
           height:22px;
           
       }
       #barra-do-telefone{
       position:absolute;
       left:35%;
       top:45%;
       height:22px;
       }
      
    </style>
    <body>
       
        <img src="gps.png" id="gps" width="60px" height="60px" >
        <div id="pagina"><center>PhoneLocation</center></div>
        
        <div id="login-box-interno">
            <div id ="facalogin">Faça o Login</div>
            <form action="valida.php" method="POST">
        <h3 id="Usuario-login">Usuario:<h3><input type="text" name="usuario" id="escrever" size="20"><br><br>
       <h3 id="Senha-login">Senha:</h3><input type="password" name="senha" id="senha1" size="20">
       <input type="submit" value="ENTRAR"  id="enviar" name="enviar" size="15">
       <input type="reset" value="CANCELAR" id="cancelar" size="15">
    
</form>
            
       
        </div>
        <div id="caixa-cadastro">
            
            <div id="facacadastro">Faça Seu Cadastro !</div>
            <form action="processa.php" method="POST">
                <h2 id="Usuario-cadastro">Usuario:</h2><input type="text" name="usuario" placeholder="Usuario" required autofocus id="barra-do-usuario" size="25" maxlength="20" >
                <h2 id="Senha-cadastro"> Senha:</h2><input type="password" name="senha" placeholder="********" required autofocus id="barra-da-senha" size="25" maxlength="20" >
                <h2 id="Email-cadastro">Email:</h2><input type="email" name="email" placeholder="Email" required autofocus id="barra-do-email" size="30" maxlength="20">
                <h2 id="Telefone-cadastro">Telefone:</h2><input type="number" name="telefone" placeholder="(99)9999-9999" required autofocus id="barra-do-telefone" size="25" maxlength="20">
                <input type="submit" value="CADASTRAR" size="30" id="gravar">
                <input type="reset" value="LIMPAR" size="30" id="limpar">
            </form>
            
        </div>
         
    
    </body>
</html>

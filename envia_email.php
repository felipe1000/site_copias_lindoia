<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:::Cópias Lindoia:::</title>
<link href="principal.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
<div id="topo"></div>
<div id="nav"><?php include("nav_cliente.html"); ?></div>
 <div id="banner_promocoes"><?php include("banner_promocoes.html");?> </div>
<div id="meio">
  <div id="meio_esquerda">
    <div id="cadastro">
     <p class="style1">
       <?php
   session_start();
   session_name('admin');
   if($_SESSION['validacao']==1){
	   $nome = $_SESSION['nome'];
	   $email = $_SESSION['email'];
    echo "Olá '$nome'.";
      }else{
        header("Location: index.php");
	  }
      
  ?>&nbsp;&nbsp;
     <a href="deslogar.php">Sair</a>
    </div>
    <div id="servicos"><?php include ("servicos_meio.html");?> </div>
    <div id="contador"><?php include ("contadorVisitas.php");?></div>
  </div>
  <div id="meio_direita">
   <?php
   
   $para="felipeguedes01@hotmail.com";
   $mensagem ="<strong>Nome: </strong>".$nome."<br>";	   
   $assunto=$_POST['assunto'];
   $mensagem .= "<strong>Mensagem: </strong>".$_POST['mensagem']."<br><strong>Email:</strong>".$email;
   $headers="Content-Type text/html charset=utf-8";
   $headers .="From: CopiasLindoia.com.br<copias@copiaslindoia.com.br>\n";
   $headers .="X-Sender: <copias@copiaslindoia.com.br>\n";
   $headers .="X-Mailer: PHP v".phpversion()."\n";
   $headers .="X-IP: ".$_SERVER['REMOTE_ADDR']."\n";
   $headers .="Return-Path: <copias@copiaslindoia.com.br>\n";
   $headers .="MINE-Version: 1.0\n";
 
 if(mail($para,$assunto,$mensagem,$headers)){
	 
	 echo "<br><strong>e-mail enviado com sucesso!</strong>";
	 echo "<p>Retornaremos sua mensagem em breve</p>"; 
	 echo "<p>para seu E-mail cadastrado no Site.</p>";

 }else{
	 
     echo "e-mail não enviado!";
 }
 ?>
</div>
</div>
 <div id="rodape"></div>
</div>

</body>
</html>
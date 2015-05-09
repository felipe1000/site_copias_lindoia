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
  <div id="meio_direita"><?php include ("contato_cli.html");?></div>
</div>
 <div id="rodape"></div>
</div>

</body>
</html>
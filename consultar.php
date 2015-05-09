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
<div id="nav"><?php include("nav_secreta.html"); ?></div>
<div id="meio">
  <div id="meio_esquerda">
    <div id="cadastro">
     <p class="style1"><a href="deslogar.php">Sair</a></p>
    </div>
    <div id="servicos"></div>
    <div id="contador"><?php include ("contadorVisitas.php");?></div>
  </div>
  <div id="meio_direita">
   <?php
    session_start();
    session_name("admin");
	 if($_SESSION['validacao']==1){
	 $nome = $_SESSION['nome'];
	 }else{
        header("Location: index.php");
	 }

   ?>
   <iframe width="590" height="600" frameborder="0" scrolling="yes" src="clientes_cadastrados.php"></iframe>
  </div>
</div>
 <div id="rodape"></div>
  Desenvolvido por <a href="https://www.facebook.com/felipe.guedesmaciel">Felipe Guedes Maciel</a>
</div>
</body>
</html>
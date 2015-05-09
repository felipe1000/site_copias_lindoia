<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>:::Cópias Lindoia:::</title>
<link href="principal.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="container">
<div id="topo"></div>
<div id="nav"><?php include("nav_cliente.html"); ?></div>
 <div id="banner_promocoes"><?php include("banner_promocoes.html");?></div>
<div id="meio">
  <div id="meio_esquerda">
    <div id="cadastro">
     <p class="style1">
       <?php
   session_start();
   session_name('admin');
   if($_SESSION['validacao']==1){
	   $nome = $_SESSION['nome'];
    echo "Olá '$nome'.";
      }else{
        header("Location: index.php");
	  }
      
  ?>&nbsp;&nbsp;
     <a href="deslogar.php">Sair</a>
    </div>
    <div id="servicos"><?php include ("servicos_meio.html");?> </div>
    <div id="contador"><?php include"contadorVisitas.php";?></div>
  </div>
  <div id="meio_direita"><?php include("banners_meio.html");?></div>
</div>
 <div id="rodape"></div>
 Desenvolvido por <a href="https://www.facebook.com/felipe.guedesmaciel" target="_blank">Felipe Guedes Maciel</a>
</div>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title><script type="text/javascript" language="javascript" src="lytebox.js"></script>  
<link rel="stylesheet" href="lytebox.css" type="text/css" media="screen" />
<style type="text/css">
<!--
.style1 {
	font-size: 18px
}
-->
</style>
<link href="principal.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="container">
<div id="topo"></div>
<div id="nav"><?php include("nav.html"); ?></div>
 <div id="banner_promocoes"><?php include("banner_promocoes.php");?> </div>
<div id="meio">
  <div id="meio_esquerda">
    <div id="cadastro">
     <p class="style1"><a href="form1.html" class="lytebox" data-lyte-options="width:650 heigth:400">Cadastre-se</a> | <a href="form2.html" class="lytebox" data-lyte-options="width:650 heigth:400">Entre</a></p>
    </div>
    <div id="servicos"><?php include ("servicos_meio.php");?> </div>
    <div id="contador"><?php include ("contadorVisitas.php");?></div>
  </div>
  <div id="meio_direita">
  
  <?php
session_start();
session_name("admin");
if($_SESSION['validacao']==1){
?>


<a href="consultar.php">consultar</a>
<a href='deslogar.php'>DESLOGAR</a>


<?php
}else{
echo "Acesso negado";
}
?>
  
  </div>
</div>
 <div id="rodape"></div>
</div>
</body>
</html>
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
  echo "Olá '$nome'.";
?>

<div align="center"><br /><br />Aqui você vai poder trocar os banners de promoções<br />
verificar a lista de clientes excluir e alterar.</div>




<?php
}else{
header("Location: index.php");
}
?>
  
  </div>
</div>
 <div id="rodape"></div>
  Desenvolvido por <a href="https://www.facebook.com/felipe.guedesmaciel" target="_blank">Felipe Guedes Maciel</a>
</div>
</body>
</html>
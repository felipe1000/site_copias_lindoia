<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="principal.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
<div id="topo"></div>
<div id="nav"><?php include("nav.html"); ?></div>
 <div id="banner_promocoes"><?php include("banner_promocoes.html");?> </div>
<div id="meio">
  <div id="meio_esquerda">
    <div id="cadastro">
     <p class="style1"><a href="form1.html">Cadastre-se</a> | <a href="form2.php">Entre</a></p>
    </div>
    <div id="servicos"><?php include ("servicos_meio.html");?> </div>
    <div id="contador"><?php include ("contadorVisitas.php");?></div>
  </div>
  <div id="meio_direita"><?php include ("contato.html");?></div>
</div>
 <div id="rodape"></div>
</div>

</body>
</html>
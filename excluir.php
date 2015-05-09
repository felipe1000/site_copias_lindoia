<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><div align="center">
<?php

$id = $_GET['id'];
include "banco.php";
$objeto = new banco();
$objeto->conectar("copias");
$objeto->excluir($id);
echo "Cliente Excluido!<br>";
echo "<a href='clientes_cadastrados.php'>Voltar</a>";

?>
<div>
</body>
</html>
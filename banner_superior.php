<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
unset($_ELEMENTOS);

$_ELEMENTOS[] = '<a href="#"><img src="plotagem.png" width="860" height="140"  /></a>';
$_ELEMENTOS[] = '<a href="#"><img src="copias.png" width="860" height="140"  /></a>';
$_ELEMENTOS[] = '<img src="adesivos.png" width="860" height="140"  /></a>';

$total = count($_ELEMENTOS); // Calcula o total de elementos
$escolhido = rand(0, $total - 1); // Define um número aleatório
 //while(isset($_ELEMENTOS)){
echo $_ELEMENTOS[$escolhido]; // Exibe o elemento
?>
<body>
</body>
</html>
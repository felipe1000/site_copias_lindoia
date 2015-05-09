<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:::Cópias Lindoia:::</title>
</head>

<body><div align="center">
<?php
include "banco.php";

$verificacao =$_POST['login'];
$teste = new banco();
$teste->conectar('copias');
$teste->verificacao($verificacao);

$nome=$_POST['nome'];
$login=$verificacao;
$email=$_POST['email'];
$senha=$_POST['senha'];
$comfirme=$_POST['comfirme'];
$telefone=$_POST['telefone'];
$info=$_POST['info'];
$id_tipopessoa = 2;
if($senha==$comfirme){
$obj = new banco();
$obj->conectar('copias');
$obj->inserir($nome, $login, $email, $senha, $comfirme, $telefone, $info, $id_tipopessoa);
}else{
	
	echo"<strong>A comfirmação da senha não corresponde</strong>";
	echo"<br>"."<a href='form1.html'>Voltar</a>"."<br>";
}

?></div>
</body>
</html>
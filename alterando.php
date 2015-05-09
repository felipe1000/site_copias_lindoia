<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
session_start();
session_name('admin');
if ($_SESSION['validacao'] == 1)
{
$nome = $_POST['nome'];
$login = $_POST['login'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$comfirme = $_POST['comfirme'];
$email = $_POST['email'];
$info=$_POST['info'];
$id_tipopessoa=$_POST['id_tipopessoa'];
$id=$_POST['id_pessoas'];
if($senha==$comfirme){
include "banco.php";
$objeto = new banco();
$objeto->conectar("copias");
$objeto->alterar($nome, $login, $email, $senha, $comfirme, $telefone, $info, $id_tipopessoa, $id);
}else{
	
	echo"<strong>A comfirmação da senha não corresponde</strong>";
	
}

}
?>
</body>
</html>
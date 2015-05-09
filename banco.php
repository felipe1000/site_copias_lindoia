<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Untitled Document</title>
  </head>
  <body>
  <?php
   // banco do cópias
   class banco {
   public $banco; 
   function conectar($banco){
	   $this->banco=$banco;
	   $con= mysql_connect("localhost","root","") or die ("erro na função conctar");
	   mysql_select_db($banco) or die ("erro na função conectar"); 
   }
	
   function verificacao($verificacao){
	   $this->verificacao =$verificacao;
	   $consulta="select login from pessoas where login='$verificacao'";
	   $resultado=mysql_query($consulta) or die ("Erro na function Verificação");
	   if(mysql_num_rows($resultado)>=1){
		   header("Location: verificacao.php");
	   }
   }
 
   function Login($login, $senha){
	   $this->login=$login;
	   $this->senha=$senha;
	   $consulta="select  nome, login, senha, email, id_tipopessoa from pessoas where login='$login' and senha='$senha'";
	   $resultado=mysql_query($consulta) or die ("Erro na function Login");
	   if(mysql_num_rows($resultado)!=1){
		   echo "<br><br>login ou senha errados";
	   }else{
		   session_start();
		   session_name("admin");
		   $validacao=1;
		   while($linha=mysql_fetch_assoc($resultado)){
			   $tipopessoa = $linha['id_tipopessoa'];
			   $nome = $linha['nome'];
			   $email= $linha ['email'];
		   }
		   $_SESSION['validacao']=$validacao;
		   $_SESSION['login']=$login;
		   $_SESSION['id_tipopessoa'] = $tipopessoa;
		   $_SESSION['nome'] = $nome ;
		   $_SESSION['email'] = $email ;
		   if($tipopessoa==1){
			   header("Location: secreta.php");
		    }else{
				header("Location: cliente.php");
		    }
	    }
   }

   function consultar(){
	session_start(); 
	session_name("admin");
	$consulta ="select id_pessoas, nome, login, email, telefone FROM pessoas";
	$resultado= mysql_query($consulta) or die ("Erro na Função Conectar");
	
	  while ($linha= mysql_fetch_assoc($resultado)){
		  
		echo "<hr>Nome: ".$linha['nome']."<br>";
		echo "<br><br> Login: ".$linha['login']."<br>";
		echo "<br><br> E-mail: ".$linha['email']."<br>";
		echo "<br><br> Telefone: ".$linha['telefone']."<br>";
		$id = $linha['id_pessoas'];
		$nome =$linha['nome'];
		if($id!=1){//usei esse $id!=1 para não poder alterar a conta do administrador
		echo"<a href='alterar.php?id=$id?nome=$nome'><strong>Alterar</strong></a>"."&nbsp;&nbsp";
		echo"<a href='excluir.php?id=$id'><strong>Excluir</strong></a>"."<br>";
		}
		} 
	}
	 
function inserir($nome, $login, $email, $senha, $comfirme, $telefone, $info, $id_tipopessoa){
	$sql = "INSERT INTO pessoas(nome, login, email, senha, comfirme, telefone, info, id_tipopessoa) VALUES('$nome', '$login', '$email', '$senha', '$comfirme', '$telefone', '$info', '$id_tipopessoa')";
	$resultado = mysql_query($sql) or die("Falha na inserção");
	echo "<strong>Você está Cadastrado<br>Dados inseridos com sucesso</strong>";
	$para="felipeguedes01@hotmail.com";
	$assunto="Um Cadastro foi feito no Site do Cópias Lindoia.";
    $mensagem="Um Cadastro foi feito no Site do Cópias Lindoia.<br>Nome:'$nome'<br>E-mail:'$email'<br>Telefone:'$telefone'<br>Mensagem:'$info'";
	$headers="Content-Type text/html charset=utf-8";
	$headers .="From: CopiasLindoia.com.br<copias@copiaslindoia.com.br>\n";
    $headers .="X-Sender: <copias@copiaslindoia.com.br>\n";
    $headers .="X-Mailer: PHP v".phpversion()."\n";
    $headers .="X-IP: ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .="Return-Path: <copias@copiaslindoia.com.br>\n";
    $headers .="MINE-Version: 1.0\n";
	if(mail($para,$assunto,$mensagem,$headers)){
		$to= $email;
		$ass="Cadastro no Site do Cópias Lindóia";
		$message="Seu Cadastro foi Realizado com Suscesso <br>Nome: ".$nome."<br>Login: ".$login."<br> Senha: ".$senha."<br>Qualquer duvida agora você pode mandar uma mensagem no site do cópias emtre na página contato.<br>Por favor não retorne esse email.";
		$readers="Content-Type text/html charset=utf-8";
		$headers .="From: CopiasLindoia.com.br<copias@copiaslindoia.com.br>\n";
        $headers .="X-Sender: <copias@copiaslindoia.com.br>\n";
        $headers .="X-Mailer: PHP v".phpversion()."\n";
        $headers .="X-IP: ".$_SERVER['REMOTE_ADDR']."\n";
        $headers .="Return-Path: <copias@copiaslindoia.com.br>\n";
        $headers .="MINE-Version: 1.0\n";
		
		mail($to,$ass,$message,$headers);
	}
}
function alterando($id){
     $this->alterando =$id;
	 $consulta="select nome, login, telefone, senha, comfirme, email,info,id_tipopessoa, id_pessoas  from pessoas where id_pessoas='$id'";
	$resultado=mysql_query($consulta) or die ("Erro na function alterando");
	if(mysql_num_rows($resultado)==1){
		session_start();
		session_name("admin");
		$validacao=1;
		while($linha=mysql_fetch_assoc($resultado)){
			
			$nome = $linha['nome'];
			$login = $linha['login'];
			$telefone = $linha['telefone'];
			$senha = $linha['senha'];
			$comfirme = $linha['comfirme'];
			$email = $linha['email'];
			$info=$linha['info'];
			$id_tipopessoa=$linha['id_tipopessoa'];
			$id = $linha['id_pessoas']; 
			echo "
  </p>
  <p>Nome:</p>
  <p>
    <input type='text' name='nome' id='textfield'  value='$nome'/>
  </p>
  <p>Login: </p>
  <p>
    <input type='text' name='login' id='textfield2' value='$login' />
</p>
<p>Telefone: </p>
  <p>
    <input type='text' name='telefone' id='textfield3' value='$telefone' />
</p>
<p>Senha: </p>
  <p>
    <input type='password' name='senha' id='textfield4'value='$senha' />
</p>
<p>Comfirme: </p>
  <p>
    <input type='password' name='comfirme' id='textfield4'value='$comfirme' />
</p>
<p>E-mail: </p>
  <p>
    <input type='text' name='email' id='textfield5'value='$email' />
</p>
  <p>
    <input type=''text' style='display:none'name='info' id='textfield6'value='$info' />
</p>
  <p>
    <input type='text' style='display:none' name='id_tipopessoa' id='textfield4' value='$id_tipopessoa' />
</p>
  <p>
    <input type='text' style='display:none' name='id_pessoas' id='textfield7' value='$id' />
</p>";
		
		}
	}
}
function alterar($nome, $login, $email, $senha, $comfirme, $telefone, $info, $id_tipopessoa, $id){
$this->nome = $nome;
$this->login =$login;
$this->Email =$email;
$this->senha = $senha;
$this->Comfirme = $comfirme;
$this->Telefone=$telefone;
$this->info = $info;
$this->id_tipopessoa=$id_tipopessoa;
$this->id_pessoas= $id;

$alterar = "UPDATE pessoas SET nome = '$nome', login='$login', email ='$email', senha = '$senha', comfirme ='$comfirme', telefone ='$telefone', info ='$info',id_tipopessoa ='$id_tipopessoa' WHERE id_pessoas ='$id'" ;
$resultado = mysql_query($alterar)
or die("Falha na fumção Alterar");
echo "Dados alterados com sucesso";
} 

 function excluir($id){
  $this->id = $id;
  $consultar = "DELETE FROM pessoas WHERE id_pessoas= '$id'";
  $resultado = mysql_query($consultar) or die("Falha na execução da consulta");
  
}
	 
	 
	 
	 
	 
	}
?>

</body>
</html>

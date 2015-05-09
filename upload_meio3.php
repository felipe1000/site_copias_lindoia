<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <?php
   // Repasse a Variável do Upload  
   $arquivo=isset($_FILES['arquivo'])?$_FILES['arquivo']:FALSE;
   //Caso a variável $arquivo contenha o valor FALSE, esse script foi acessado
   // diretamente, então mostra um alerta para o úsuario 
   if(!$arquivo){
	   echo "Não acesse esse arquivo diretamente!";
	   }else{
   //Tamanho Máximo do arquivo em bytes
   $maximo=300000;
   //verificação
   if($arquivo['size']>$maximo){
	   echo "Erro! O Arquivo enviado por você ultrapassa o";
	   echo "limite máximo de ".$maximo." bytes !Envie outro arquivo";
	   }else{
   //Verifica se o mini-type é de imagem PNG
   if($arquivo['type']!=="image/png"){
	   echo " O Arquivo enviado por você não é uma imagem PNG! Envie outro! ";	      }else{
   /*insira aqui a pasta que deseja salvar o arquivo*/
   $uploaddir='/home/u630794694/public_html/';
   /* Formulario*/
   $nome_troca=$_FILES['arquivo']['name'];
   $nome= str_replace("$nome_troca","meio3.png",$arquivo['name']);
   $uploadfile=$uploaddir.$nome;
   if (move_uploaded_file($arquivo['tmp_name'],$uploadfile)){
    echo "<h1>Arquivo Enviado</h1>";
	echo "Tamanho do arquivo: ".($_FILES['arquivo']['size'])."bytes<br>";
    echo "Tipo do arquivo: ".($_FILES['arquivo']['type'])."<br>";
	echo "O Banner pode demorar alguns minutos para entrar no site conforme atualização";
	echo "<p>Uma Dica se Deslogue como Administrador e Aguarde uns minutos</p>";
	echo "Depois Atualize o site (Botão F5) que o banner irá aparecer";
    }
    else {echo "Arquivo não enviado";
	}
	   }//fecha a condição else do tipo de arquivo
	   }//fecha a condição else do limite de tamanho do arquivo
	   }//fecha a condição else do repasse da variável upload
  ?>
 </body>
</html>

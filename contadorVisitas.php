<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  // salve os arquivos contador.txt e os outros .txts vazio no htdocs ou pasta local
  $arquivo ="contador.txt";
  //abre o arquivo modo leitura
  $fp = fopen($arquivo,"r");
  //pega o numero e joga no $contador
  $contador = fgets($fp);
  fclose($fp);
  //somo mais 1
  $contador =$contador+1;
  //abre o arquivo modo escrita
  $fp = fopen($arquivo,"w");
  fwrite($fp,$contador);
  //fecha o arquivo.
  fclose($fp);
  // começa a armazenar a data.
  $data = date(" d-m-y h:i:s ");
  $dia=date("d");
  $mes=date("m");
  $ano=date("y");
  $hora=date("h");
  $minuto=date("i");
  $segundo=date("s");
   // Arquivo que vai contar os dias da semana
  $arquivoi ="i.txt";
  $fp = fopen($arquivoi,"r");
  $i = fgets($fp);
  fclose($fp);
   // Arquivo que vai contar o visitas por Mês
   $arquivomes ="contadormes.txt";
   $fp = fopen($arquivomes,"r");
   $contmes = fgets($fp);
   fclose($fp);
   // Arquivo que vai contar o visitas por semana
   $arq_semana ="contadorsemana.txt";
   $fp = fopen($arq_semana,"r");
   $semana = fgets($fp);
   fclose($fp);
   //Arquivo que vai armazenar as visitas de Ontem
   $arquivontem ="contadorontem.txt";
   $fp = fopen($arquivontem,"r");
   $diaontem = fgets($fp);
   fclose($fp);
   //O Arquivo que vai armazenar as visitas de Hoje
   $arquivodia ="contadordia.txt";
   $fp = fopen($arquivodia,"r");
   $contadordia = fgets($fp);
   fclose($fp);
   //O arquivo mesatual.txt vai armazenar o mes que estamos	   
   $arquivomesatual ="mesatual.txt";
   $fop = fopen ($arquivomesatual,"r");
   $mesatual = fgets($fop);
   fclose($fop);
   //O arquivo diatual.txt vai armazenar o dia de Hoje
   // Aqui tá o pulo do gato!!!	   
   $arquivoatual ="diatual.txt";
   $fop = fopen ($arquivoatual,"r");
   $diatual = fgets($fop);
   fclose($fop);
	  if($dia==$diatual){
		  $contadordia=$contadordia+1;
		  $semana=$semana+1;
		  $contmes=$contmes+1;
	      //salvando o contador de Visitas por Mês
          $fp = fopen($arquivomes,"w");
          fwrite($fp,$contmes);
          fclose($fp);
          //salvando o contador de Visitas por semana
          $fp = fopen($arq_semana,"w");
          fwrite($fp,$semana);
          fclose($fp);
	      //salvando o contador de Visitas do Dia
          $fp = fopen($arquivodia,"w");
          fwrite($fp,$contadordia);
          fclose($fp);
          //a condição else só vai ser usada quando o trocar o dia :)
	  }else{
		  if($dia > $diatual+1){
			  
			  $ontem=0;
			  
			  }else{
		  $ontem =$contadordia;
		  $contadordia=1;
			  }
		  $i =$i+1; //variavel recebe mais um 
		  if($i==7){
		      $semana=$contadordia;
			  $i=0;
			  }else{
			  $semana=$semana+$contadordia;
			  }
		  //salvando o contador de semana  
		  $fp = fopen($arquivoi,"w");
          fwrite($fp,$i);
          fclose($fp);
		  $contmes=$contmes+1;
	      //salvando o contador de Visitas por Mês
          $fp = fopen($arquivomes,"w");
          fwrite($fp,$contmes);
          fclose($fp);
         //salvando o contador de Visitas por semana
          $fp = fopen($arq_semana,"w");
          fwrite($fp,$semana);
          fclose($fp);
	      //salvando o contador de Visitas do Dia
          $fp = fopen($arquivodia,"w");
          fwrite($fp,$contadordia);
          fclose($fp); 
		  //$diatual recebe o dia de hoje e salva no arquivo
		  $diatual=$dia;
	      $fop=fopen($arquivoatual,"w");
	      fwrite($fop,$diatual);
	      fclose($fop); 
          //$diaontem recebe o dia de ontem e salva no arquivo
          $diaontem =$ontem;
          $fp = fopen($arquivontem,"w");
          fwrite($fp,$diaontem);
          fclose($fp);
	  }
	  if($mes!=$mesatual){
		  
		  $contmes=1;
	      //salvando o contador de Visitas por Mês
          $fp = fopen($arquivomes,"w");
          fwrite($fp,$contmes);
          fclose($fp);
		  //salvando o contador do Mês
		  $mesatual=$mes;
		  $fp = fopen($arquivomesatual,"w");
          fwrite($fp,$mesatual);
          fclose($fp);
		  }
	 
  echo "<div align=center>Visitas</div>";
  echo "<div align=center>Hoje $contadordia</div>";
  echo "<div align=center>Ontem $diaontem</div>";
  echo "<div align=center>Esta Semana $semana</div>";
  echo "<div align=center>Este Mês $contmes</div>";
  echo "<div align=center>Total $contador</div>";
  ?>
	
	
</body>
</html>
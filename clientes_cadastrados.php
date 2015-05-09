
  <div align="center"><h2>Clientes Cadastrados</h2> 
<?php
include"banco.php";
$ob = new Banco();
$ob->conectar("copias");
$ob->Consultar();
?>
</div>

<?php
session_start();
session_name('admin');
unset($_SESSION['login']);
unset($_SESSION['validacao']);
session_destroy(); 
header("Location: index.php");
?>
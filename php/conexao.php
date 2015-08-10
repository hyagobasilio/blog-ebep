<?php

$host = "localhost";
$banco = "blog";
$usuario = "root";
$senha = "root";
$conexao = mysql_pconnect($host, $usuario, $senha) or mysql_error(); 
mysql_select_db($banco);
mysql_set_charset('utf8');
?>
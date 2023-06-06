<?php
/*Criando conexão com o banco de dados */

$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'sistema';

$conexao = mysqli_connect($servidor,$user,$password,$banco);

?>
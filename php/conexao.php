<?php


$host = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "barbearia"; 

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_errno) {
    die("Erro na conexão com o banco de dados: ". $conexao -> error);
}

 ?>

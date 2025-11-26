<?php
$nomeServidor = "localhost";
$usuario = "root";
$senha = "";
$nomeBancoDeDados = "senai";

$conexao = new mysqli($nomeServidor, $usuario, $senha, $nomeBancoDeDados); 

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

echo "Conectado";
?>

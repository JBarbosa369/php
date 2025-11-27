<?php
require_once "db.php";
function selecionarTabela($nomeDaTabela) {
    global $conexao;
    $sql = "SELECT * FROM  $nomeDaTabela";
    $resultado = $conexao-> query($sql);
    if ($resultado->num_rows > 0) {
      return $resultado;
        
    } else{ 
        echo "Tabela não encontrada !!!";
}}

?>
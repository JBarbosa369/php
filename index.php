<?php

include "actions.php";

$table_users = selecionarTabela ('usuarios');

foreach($table_users as $key => $value){
    echo $value['Nomes'];
}






?>

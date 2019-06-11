<?php

include "../banco.php";
$cliente = $_GET['id'];

if($cliente == ' '){
    echo $cliente .' Chave invalida para Exclusao';
    
}else{
    if(remover_cliente($conexao, $_GET['id'])){
    
    }else{
        //echo 'Agum erro';
        //die();
        header('Location: ../create/tabelaCliente.php');
    }
}

header('Location: ../create/tabelaCliente.php');


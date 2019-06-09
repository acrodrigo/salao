<?php

include "../banco.php";
$cliente = $_GET['id'];
if($cliente == ' '){
    echo $cliente .' Chave invalida para Exclusao';
    
}else{
    remover_produto($conexao, $_GET['id']);
}

header('Location: ../create/tabelaProdutos.php');


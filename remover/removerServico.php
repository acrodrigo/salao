<?php

include "../banco.php";
$servido = $_GET['id'];
if($servido == ' '){
    echo $servido .' Chave invalida para Exclusao';
    
}else{
    remover_servico($conexao, $_GET['id']);
}

header('Location: ../create/tabelaServicos.php');


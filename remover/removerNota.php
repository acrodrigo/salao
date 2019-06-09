<?php

include "../banco.php";
$nota = $_GET['id'];
if($nota == ' '){
    echo $nota .' Chave invalida para Exclusao';
    
}else{
    remover_nota($conexao, $_GET['id']);
}

header('Location: ../create/tabelaNotas.php');


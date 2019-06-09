<?php

include "../banco.php";

$funcionario = $_GET['id'];

if($funcionario == ' '){
    echo $funcionario .' Chave invalida para Exclusao';
    
}else{
    remover_funcionario($conexao, $_GET['id']);
}

//header('Location: ../index.php');


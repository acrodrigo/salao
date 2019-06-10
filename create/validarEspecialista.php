<?php

include "../banco.php";

$especialista  = array();

$especialista['idServico'] = $_POST['idServico'];
$especialista['cpfFuncionario'] = $_POST['cpfFuncionario'];
//$servico['comissao'] = $_POST['comissao'];

if(adicionar_especialista($conexao, $especialista)){
    header('tabelaServicos.php');
}else{
    die();
}

//gravar_servico($conexao, $servico);
header('Location: ../create/tabelaServicos.php');
?> 
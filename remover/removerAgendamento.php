<?php

include "../banco.php";
$agendamento = $_GET['id'];
if($agendamento == ' '){
    echo $agendamento .' Chave invalida para Exclusao';
    
}else{
    remover_agendamento($conexao, $_GET['id']);
}

header('Location: ../create/tabelaAgendamento.php');


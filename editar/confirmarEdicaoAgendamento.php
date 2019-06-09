<?php

include "../banco.php";

$agendamento  = array();

$agendamento['idAgendamento']=$_POST['idAgendamento'];
$agendamento['Cliente_cpfCliente']=$_POST['Cliente_cpfCliente'];
$agendamento['Servicos_idServico']=$_POST['Servicos_idServico'];
$agendamento['Funcionario_cpfFuncionario']=$_POST['Funcionario_cpfFuncionario'];
$agendamento['dataHora']=$_POST['dataHora'];

editar_agendamento($conexao, $agendamento);
header('Location: ../create/tabelaAgendamento.php');

?>
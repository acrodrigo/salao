<?php

include "../banco.php";

echo "Entrou aqui no Validar";

$agendamento = array();

$agendamento['Cliente_cpfCliente']=$_POST['Cliente_cpfCliente'];
$agendamento['dataHora']=$_POST['dataHora'];
$agendamento['Servicos_idServico']=$_POST['Servicos_idServico'];
$agendamento['Funcionario_cpfFuncionario']=$_POST['Funcionario_cpfFuncionario'];

gravar_agendamento($conexao, $agendamento);
header('Location: ../create/tabelaAgendamento.php');
?> 
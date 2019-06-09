<?php

include "../banco.php";

$agendamento = array();

$agendamento['cpfCliente'] = $_POST['cpfCliente'];
$agendamento['idServico'] = $_POST['idServico'];
$agendamento['horario'] = $_POST['horario'];
$agendamento['dia'] = $_POST['dia'].' '.$_POST["horario"].':00:00';

//echo $agendamento['horario']." ";
//echo $agendamento['dia']."  ";

//echo $agendamento['dia'].' '.$agendamento['horario'].':00:00';

gravar_agendamento($conexao, $agendamento);

?> 

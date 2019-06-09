<?php

include "../banco.php";

$servico  = array();

$servico['idServico'] = $_POST['idServico'];
$servico['nome'] = $_POST['nome'];
$servico['preco'] = $_POST['preco'];
$servico['comissao'] = $_POST['comissao'];

editar_servico($conexao, $servico);
header('Location: ../create/tabelaServicos.php');

?>
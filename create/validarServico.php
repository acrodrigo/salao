<?php

include "../banco.php";

$servico  = array();

$servico['nome'] = $_POST['nome'];
$servico['preco'] = $_POST['preco'];
$servico['comissao'] = $_POST['comissao'];

gravar_servico($conexao, $servico);
header('Location: ../create/tabelaServicos.php');
?> 
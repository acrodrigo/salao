<?php

include "../banco.php";

$cliente  = array();

$cliente['cpfCliente'] = $_POST['cpf'];
$cliente['nome'] = $_POST['nome'];
$cliente['telefone1'] = $_POST['telefone'];
$cliente['telefone2'] = $_POST['telefone2'];

editar_cliente($conexao, $cliente);
header('Location: ../create/tabelaCliente.php');
?>
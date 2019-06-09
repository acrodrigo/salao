<?php

include "../banco.php";

$funcionario  = array();

$funcionario['cpfFuncionario'] = $_POST['cpf'];
$funcionario['nome'] = $_POST['nome'];
$funcionario['telefone1'] = $_POST['telefone1'];
$funcionario['telefone2'] = $_POST['telefone2'];
$funcionario['rua'] = $_POST['rua'];
$funcionario['bairro'] = $_POST['bairro'];
$funcionario['cep'] = $_POST['cep'];
$funcionario['horarioini'] = $_POST['horarioini'];
$funcionario['horariofim'] = $_POST['horariofim'];

// Tem erro
editar_funcionario($conexao, $funcionario); 

//header('Location: ../index.php');
?>
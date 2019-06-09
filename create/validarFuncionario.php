<?php

include "../banco.php";

$funcionario  = array();
/*
$nome = $_POST['nome'];
$endereco = $_POST['cpf'];
$telefone1 = $_POST['telefone'];
$telefone2 = $_POST['email'];
*/

$funcionario['cpfFuncionario'] = $_POST['cpf'];
$funcionario['nome'] = $_POST['nome'];
$funcionario['telefone1'] = $_POST['telefone1'];
$funcionario['telefone2'] = $_POST['telefone2'];
$funcionario['rua'] = $_POST['rua'];
$funcionario['bairro'] = $_POST['bairro'];
$funcionario['cep'] = $_POST['cep'];
$funcionario['horarioini'] = $_POST['horarioini'].":00";
$funcionario['horariofim'] = $_POST['horariofim'].":00";

gravar_Funcionario($conexao, $funcionario);

?> 
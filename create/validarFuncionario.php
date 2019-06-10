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

if($_POST['opcao'] == 'adm'){
    echo "Funcionario Administrativo";
    if(gravar_Funcionario($conexao, $funcionario) == true){
        gravar_funcionarioAdm($conexao, $funcionario['cpfFuncionario']);
    }
    // criar funcioanario admi
}else if($_POST['opcao'] == 'sal'){
    echo "Criar funcionario Salao";
    if(gravar_Funcionario($conexao, $funcionario) == true){
        gravar_funcionarioSalao($conexao, $funcionario['cpfFuncionario']);
    }
    ///
}else{
    echo "Erro ";
}

///gravar_Funcionario($conexao, $funcionario);

?> 
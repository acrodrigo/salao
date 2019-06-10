<?php

$bdServidor = '127.0.0.1';
$bdUsuario = 'admin';
$bdSenha = 'password';
$bdBanco = 'salao';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

mysqli_set_charset($conexao, 'utf8');

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}

// Buscar 
function buscar_clientes($conexao){

    $sqlBusca = 'SELECT * FROM Cliente';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $clientes = array();
    while ($cliente = mysqli_fetch_assoc($resultado)) {
        $clientes[] = $cliente;
    }
    return $clientes;
}

function buscar_cliente($conexao, $id){

    $sqlBusca = 'SELECT * FROM Cliente WHERE cpfCliente = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}


function buscar_funcionarios($conexao){

    $sqlBusca = 'SELECT * FROM Funcionario';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $clientes = array();
    while ($cliente = mysqli_fetch_assoc($resultado)) {
        $clientes[] = $cliente;
    }
    return $clientes;
}

function buscar_funcionario($conexao, $id){

    $sqlBusca = 'SELECT * FROM Funcionario WHERE cpfFuncionario = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function buscar_produtos($conexao){

    $sqlBusca = 'SELECT * FROM Produto';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $produtos = array();
    while ($produto = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $produto;
    }
    return $produtos;
}

function buscar_produto($conexao, $id){

    $sqlBusca = 'SELECT * FROM Produto WHERE idProduto = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function buscar_servicos($conexao){

    $sqlBusca = 'SELECT * FROM Servicos';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $servicos = array();
    while ($servico = mysqli_fetch_assoc($resultado)) {
        $servicos[] = $servico;
    }
    return $servicos;
}

function buscar_servico($conexao, $id){

    $sqlBusca = 'SELECT * FROM Servicos WHERE idServico = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function buscar_nota($conexao, $id){

    $sqlBusca = 'SELECT * FROM nota WHERE idNota = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function buscar_agendamentos($conexao){

    $sqlBusca = 'SELECT * FROM Agendamento';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $agendamentos = array();
    while ($agendamento = mysqli_fetch_assoc($resultado)) {
        $agendamentos[] = $agendamento;
    }
    return $agendamentos;
}

function buscar_agendamento($conexao, $id){

    $sqlBusca = 'SELECT * FROM Agendamento WHERE idAgendamento = ' .$id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function buscar_notas($conexao) {
    $sqlBusca = 'SELECT * FROM  Nota';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $notas = array();
    while ($nota = mysqli_fetch_assoc($resultado)) {
        $notas[] = $nota;
    }
    return $notas;
}


// - - - - - -- Create ------------------ - -------------------------------



function gravar_cliente($conexao, $cliente){
    
    $cpf = $cliente['cpfCliente'];
    $nome = $cliente['nome'];
    $tele1 = $cliente['telefone1'];
    $tele2 = $cliente['telefone2'];

    $sql = "INSERT INTO Cliente VALUES";
    $sql .= "('$cpf', '$nome', '$tele1', '$tele2')";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
    #return mysqli_fetch_assoc($resultado);
}

function gravar_funcionario($conexao, $funcionario){
    
    $cpf = $funcionario['cpfFuncionario'];
    $nome = $funcionario['nome'];
    $tele1 = $funcionario['telefone1'];
    $tele2 = $funcionario['telefone2'];
    $rua = $funcionario['rua'];
    $bairro = $funcionario['bairro'];
    $cep = $funcionario['cep'];
    $hini = $funcionario['horarioini'];
    $hfim = $funcionario['horariofim'];

    $sql = "INSERT INTO Funcionario VALUES";
    $sql .= "('$cpf', '$nome', '$tele1', '$tele2', '$rua', '$bairro', '$cep', '$hini', '$hfim')";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
        return true;
    }else{
        echo "Error: ". mysqli_error($conexao);
        return false;
    }
    #return mysqli_fetch_assoc($resultado);
} 

function gravar_funcionarioSalao($conexao, $funcionario){
    
    $sql = "INSERT INTO Salao VALUES";
    $sql .= "(0, '$funcionario')";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
    #return mysqli_fetch_assoc($resultado);
} 

function gravar_funcionarioAdm($conexao, $funcionario){
    
    $sql = "INSERT INTO Administrativo VALUES";
    $sql .= "('Adm', '$funcionario')";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
    #return mysqli_fetch_assoc($resultado);
} 



function gravar_produto($conexao, $produto){
    
    $nome = $produto['nome'];
    $marca = $produto['marca'];
    $preco = $produto['preco'];
    $quantidade = $produto['quantidade'];

    $sql = "INSERT INTO Produto VALUES";
    $sql .= "(null, '$nome', '$marca', '$preco', '$quantidade')";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
    #return mysqli_fetch_assoc($resultado);
}

function gravar_servico($conexao, $servico){
    
    $nome = $servico['nome'];
    $preco = $servico['preco'];
    $comissao = $servico['comissao'];
    
    $sql = "INSERT INTO Servicos VALUES";
    $sql .= "(null,'$nome', '$preco', '$comissao')";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
    
}

function gravar_agendamento($conexao, $agendamento){

    $Cliente_cpfCliente = $agendamento['Cliente_cpfCliente'];
    $Servicos_idServico = $agendamento['Servicos_idServico'];
    $dataHora = $agendamento['dataHora'];
    $Funcionario_cpfFuncionario = $agendamento['Funcionario_cpfFuncionario'];
    
    $sql = "INSERT INTO Agendamento VALUES";
    $sql .= "(null, '$dataHora', '$Cliente_cpfCliente', '$Servicos_idServico', '$Funcionario_cpfFuncionario')";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
    
}

function gravar_nota($conexao, $nota) {

    $Cliente_cpfCliente=$nota['Cliente_cpfCliente'];
    $totalBruto=$nota['totalBruto'];
    $desconto=$nota['desconto'];
    $totalLiquido=$nota['totalLiquido']; 
    $data=$nota['data'];

    #$sql_trigger = "CREATE TRIGGER 'antes_de_criar_nota' BEFORE INSERT|UPDATE ON 'nota'
    #FOR EACH ROW
    #BEGIN
    # IF EXISTS(SELECT * FROM Cliente WHERE = {$Cliente_cpfCliente})
    #END;";
    
    $sql = "INSERT INTO Nota VALUES";
    $sql .= "(null, '$totalBruto', '$desconto', '$totalLiquido', '$Cliente_cpfCliente', '$data')";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }

}


function adicionar_especialista($conexao, $especialista){
    $id = $especialista['idServico'];
    $cpf = $especialista['cpfFuncionario'];

    $sql = "INSERT INTO Especialista VALUES";
    $sql .= "('$id', '$cpf')";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
        return true;
    }else{
        echo "Error: ". mysqli_error($conexao);
        return false;
    }
}



// ---------------------- Upadate ------------------------------------------------
function editar_cliente($conexao, $cliente){
    
    $cpf = $cliente['cpfCliente'];
    $nome = $cliente['nome'];
    $tele1 = $cliente['telefone1'];
    $tele2 = $cliente['telefone2'];

    $sql = "UPDATE Cliente SET 
        nome='$nome', telefone1='$tele1', telefone2='$tele2' 
        WHERE cpfCliente=$cpf";

    #mysqli_query($conexao, $sql);
    if(mysqli_query($conexao, $sql)){
        echo 'Foi Alerado ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
}

function editar_funcionario($conexao, $funcionario){
    
    $cpf = $funcionario['cpfFuncionario'];
    $nome = $funcionario['nome'];
    $tele1 = $funcionario['telefone1'];
    $tele2 = $funcionario['telefone2'];
    $rua = $funcionario['rua'];
    $bairro = $funcionario['bairro'];
    $cep = $funcionario['cep'];
    $hini = $funcionario['horarioini'];
    $hfim = $funcionario['horariofim'];
    echo $hini;
    echo $hfim;


    $sql = "UPDATE Funcionario SET 
        nome='$nome', telefone1='$tele1', telefone2='$tele2', rua='$rua', bairro='$bairro', cep='$cep', horarioini='$hini', horariofim='$hfim' 
        WHERE cpfFuncionario=$cpf";

    #mysqli_query($conexao, $sql);
    if(mysqli_query($conexao, $sql)){
        echo 'Foi Alerado ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
}

function editar_produto($conexao, $produto){
    
    $id = $produto['idProduto'];
    $nome = $produto['nome'];
    $marca = $produto['marca'];
    $preco = $produto['preco'];
    $quantidade = $produto['quantidade'];

    $sql = "UPDATE Produto SET 
        nome='$nome', marca='$marca', preco='$preco', quantidade='$quantidade'
        WHERE idProduto=$id";

    #mysqli_query($conexao, $sql);
    if(mysqli_query($conexao, $sql)){
        echo 'Foi Alerado ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
}


function editar_servico($conexao, $servico){
    
    $id = $servico['idServico'];
    $nome = $servico['nome'];
    $preco = $servico['preco'];
    $comissao = $servico['comissao'];

    $sql = "UPDATE Servicos SET 
        nome='$nome', preco='$preco', comissao='$comissao'
        WHERE idServico=$id";

    #mysqli_query($conexao, $sql);
    if(mysqli_query($conexao, $sql)){
        echo 'Foi Alerado ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }

}

function editar_agendamento($conexao, $agendamento){
    
    $idAgendamento=$agendamento['idAgendamento'];
    $Cliente_cpfCliente=$agendamento['Cliente_cpfCliente'];
    $Servicos_idServico=$agendamento['Servicos_idServico'];
    $Funcionario_cpfFuncionario=$agendamento['Funcionario_cpfFuncionario'];
    $dataHora=$agendamento['dataHora'];
    
    $sql = "UPDATE Agendamento SET 
        dataHora='$dataHora', Cliente_cpfCliente='$Cliente_cpfCliente', Servicos_idServico='$Servicos_idServico', Funcionario_cpfFuncionario='$Funcionario_cpfFuncionario'
        WHERE idAgendamento=$idAgendamento";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
    
}

function editar_nota($conexao, $nota) {
    $idNota=$nota['idNota'];
    $Cliente_cpfCliente=$nota['Cliente_cpfCliente'];
    $totalBruto=$nota['totalBruto'];
    $totalLiquido=$nota['totalLiquido'];
    $desconto=$nota['desconto']; 
    $data=$nota['data'];

    $sql = "UPDATE Nota SET totalBruto='$totalBruto', totalLiquido='$totalLiquido',
    desconto='$desconto', totalLiquido='$totalLiquido', Cliente_cpfCliente='$Cliente_cpfCliente', data='$data'
    WHERE idNota={$idNota}";

    if(mysqli_query($conexao, $sql)){
        echo 'Ok inserido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }

}

// -------------------------- remove -------------------------------------------------

// remover_funcionario em todas as tabelas
function remover_cliente($conexao, $cpf){
    $sqlRemover = "DELETE FROM Cliente WHERE cpfCliente = {$cpf}";
    mysqli_query($conexao, $sqlRemover);
    
    if(mysqli_query($conexao, $sqlRemover)){
        echo 'Ok Removido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
}

// Editar aqui para remover o funcionario em todas as tabelas
function remover_funcionario($conexao, $cpf){
    
    $sqlRemover = "DELETE FROM Funcionario WHERE cpfFuncionario = {$cpf}";
    mysqli_query($conexao, $sqlRemover);
    
    if(mysqli_query($conexao, $sqlRemover)){
        echo 'Ok Removido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
}

function remover_produto($conexao, $id){
    $sqlRemover = "DELETE FROM Funcionario WHERE idProduto = {$id}";
    mysqli_query($conexao, $sqlRemover);
    
    if(mysqli_query($conexao, $sqlRemover)){
        echo 'Ok Removido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
}

function remover_servico($conexao, $id){
    $sqlRemover = "DELETE FROM Servicos WHERE idServico = {$id}";
    mysqli_query($conexao, $sqlRemover);
    
    if(mysqli_query($conexao, $sqlRemover)){
        echo 'Ok Removido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
}

function remover_agendamento($conexao, $id){
    $sqlRemover = "DELETE FROM Agendamento WHERE idAgendamento = {$id}";
    mysqli_query($conexao, $sqlRemover);
    
    if(mysqli_query($conexao, $sqlRemover)){
        echo 'Ok Removido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
}

function remover_nota($conexao, $id){
    $sqlRemover = "DELETE FROM nota WHERE idNota = {$id}";
    mysqli_query($conexao, $sqlRemover);
    
    if(mysqli_query($conexao, $sqlRemover)){
        echo 'Ok Removido ';
    }else{
        echo "Error: ". mysqli_error($conexao);
    }
}


?>
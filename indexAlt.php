<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Página Inicial</title>
</head>

<?php

include "banco.php";

?>

<body>

    <div class="container">
        <div class="jumbotron">
            <div class="row">
            <h2>Agendamento Salao </h2>
        </div>
    </div>
    </br>
    
    <div class="row">
        <p>
            <a href="create/tabelaCliente.php" class="btn btn-success">Clientes</a>
        </p>   
    </div>
    
    <div class="row">
        <p>
            <a href="create/tabelaFuncionarios.php" class="btn btn-success">Funcionarios</a>
        </p>   
    </div>
    

    <div class="row">
        <p>
            <a href="create/tabelaProdutos.php" class="btn btn-success">Produtos</a>
        </p>   
    </div>
    
    <div class="row">
        <p>
            <a href="create/tabelaServicos.php" class="btn btn-success">Servicos</a>
        </p>   
    </div>
    
    <div class="row">
        <p>
            <a href="create/tabelaAgendamento.php" class="btn btn-success">Agendamentos</a>
        </p>   
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

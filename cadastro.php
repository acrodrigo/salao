<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/padrao.css">
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
    <br>
    
    <div class="row">
        <p>
            <a id =botaocliente href="create/tabelaCliente.php" class="btn btn-success">Adicionar Cliente</a>
            
            <a id =botaofuncionario href="create/createFuncionario.php" class="btn btn-success">Adicionar Funcionario</a>
            <br>
            <br>
            <a id =botaoservico href="create/createServico.php" class="btn btn-success">Adicionar Servico</a>
            <a id =botaoproduto href="create/createProduto.php" class="btn btn-success">Adicionar Produto</a>
            <br>
            <br>
            <a id= botaoagendamento href="formAgendamento.php" class="btn btn-success">Adicionar Agendamento</a>
            <br>
            <br>
            <a id= botaosalario href="create/createSalario.php" class="btn btn-success">Adicionar Salario</a>
        </p>


        <?php
          //echo "Agendamentos -- - ";
          //include "html/agendamento.php";
        ?>
        

        
        <?php
          //echo "Clientes -- - ";
          //include "html/cliente.php";
        ?>
        

        <?php
          //echo "Servicos -- - ";
          //include "html/servico.php";
        ?>


         <?php
          //echo "Clientes -- - ";
          //include "html/funcionario.php";
        ?>

        <?php
          //echo "Produtos -- - ";
          //include "html/produto.php";
        ?> 




        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

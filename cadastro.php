<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    
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
      <br>
      <br>
            <div class="row">
            <h2>Agendamento Salao </h2>
        
    </div>
    <br>



    <table class="table table-borderless">
 
  <tbody>
    <br>
    <br>
    
    <tr>
      <th scope="row"></th>
      
      <td><a id=btcliente href="create/tabelaCliente.php">
			<img style="width:100px; height:100px;"src="img/clientes.png">
      </a> </td>
      
      <td><a id="btservico" href="create/createServico.php">
        <img style="width:100px; height:100px;" src="img/servicos.png">
      </a> </td>

      <td><a id="btproduto" href="create/createProduto.php" >
        <img style="width:100px; height:100px;" src="img/produto.png">
      </a></td>
    </tr>
    <tr>
      <br>
      
      <th scope="row"></th>
      <td><a id="btfuncionario" href="create/createFuncionario.php" >
        <img style="width:100px; height:100px;" src="img/career.png">
      </a></td>

      <td><a id="btNotas" href="create/tabelaNotas.php" >
          <img style="width:100px; height:100px;" src="img/invoice.png" >
        </a></td>
      <td><a id="btAgendamento" href="formAgendamento.php" >
          <img style="width:100px; height:100px;" src="img/agendamento.png">
        </a></td>
    </tr>
    
  </tbody>
</table>

      
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

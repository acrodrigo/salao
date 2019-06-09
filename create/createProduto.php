<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <title>Adicionar Contato</title>
</head>

<body>
    <div class="container">
        <div clas="span10 offset1">
          <div class="card">
            <div class="card-header">
                <h3 class="well"> Adicionar Produto</h3>
            </div>
            <div class="card-body">
            <form class="form-horizontal" action="validarProduto.php" method="post">

                <div class="control-group <?php echo !empty($nomeErro)?'error ': '';?>">
                    <label class="control-label">Nome do Produto</label>
                    <div class="controls">
                        <input size="45" class="form-control" name="nome" type="text" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                        <?php if(!empty($nomeErro)): ?>
                            <span class="help-inline"><?php echo $nomeErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($marcaErro)?'error ': '';?>">
                    <label class="control-label">Marca</label>
                    <div class="controls">
                        <input size="25" class="form-control" name="marca" type="text" required="" value="<?php echo !empty($marca)?$marca: '';?>">
                        <?php if(!empty($marcaErro)): ?>
                            <span class="help-inline"><?php echo $marcaErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($precoErro)?'error ': '';?>">
                    <label class="control-label">Preço</label>
                    <div class="controls">
                        <input size="8" class="form-control" name="preco" type="text" required="" value="<?php echo !empty($preco)?$preco: '';?>">
                        <?php if(!empty($precoErro)): ?>
                            <span class="help-inline"><?php echo $precoErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($quantidadeErro)?'error ': '';?>">
                    <label class="control-label">Quantidade</label>
                    <div class="controls">
                        <input size="4" class="form-control" name="quantidade" type="text" required="" value="<?php echo !empty($quantidade)?$quantidade: '';?>">
                        <?php if(!empty($quantidadeErro)): ?>
                            <span class="help-inline"><?php echo $quantidadeErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="form-actions">
                    <br/>

                    <button type="submit" class="btn btn-success">Adicionar</button>
                    <a href="../index.php" type="btn " class="btn">Voltar</a>

                </div>
            </form>
          </div>
        </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>


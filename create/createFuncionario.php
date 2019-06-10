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
                <h3 class="well"> Adicionar Funcionario </h3>
            </div>
            <div class="card-body">
            <form class="form-horizontal" action="validarFuncionario.php" method="post">
                <!-- Cpf -->
                <div class="control-group <?php echo !empty($cpfErro)?'error ' : '';?>">
                    <label class="control-label">Cpf</label>
                    <div class="controls">
                        <input size="11" class="form-control" name="cpf" type="text" required="" value="<?php echo !empty($cpf)?$cpf: '';?>">
                        <?php if(!empty($cpfErro)): ?>
                            <span class="help-inline"><?php echo $cpfErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <!-- Nome -->
                <div class="control-group <?php echo !empty($nomeErro)?'error ': '';?>">
                    <label class="control-label">Nome</label>
                    <div class="controls">
                        <input size="45" class="form-control" name="nome" type="text" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $nomeErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <!-- Telefone 1 -->
                <div class="control-group <?php echo !empty($telefoneErro)?'error ': '';?>">
                    <label class="control-label">Telefone</label>
                    <div class="controls">
                        <input size="11" class="form-control" name="telefone" type="text" required="" value="<?php echo !empty($telefone)?$telefone: '';?>">
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $telefoneErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <!-- Telefone 2 -->
                <div class="control-group">
                    
                    <label class="control-label">Telefone - (Opicional)</label>
                    <div class="controls">
                        <input size="11" class="form-control" name="telefone2" type="text" >
                    </div>
                </div>

                <!-- Rua  -->
                <div class="control-group <?php echo !empty($ruaErro)?'error ': '';?>">
                    <label class="control-label">Rua</label>
                    <div class="controls">
                        <input size="45" class="form-control" name="rua" type="text" required="" value="<?php echo !empty($rua)?$rua: '';?>">
                        <?php if(!empty($ruaErro)): ?>
                            <span class="help-inline"><?php echo $ruaErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <!-- Bairro  -->
                <div class="control-group <?php echo !empty($bairroErro)?'error ': '';?>">
                    <label class="control-label">Bairro</label>
                    <div class="controls">
                        <input size="25" class="form-control" name="bairro" type="text" required="" value="<?php echo !empty($bairro)?$bairro: '';?>">
                        <?php if(!empty($bairroErro)): ?>
                            <span class="help-inline"><?php echo $bairroErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <!-- Cep  -->
                <div class="control-group <?php echo !empty($cepErro)?'error ': '';?>">
                    <label class="control-label">CEP: </label>
                    <div class="controls">
                        <input size="11" class="form-control" name="cep" type="text" required="" value="<?php echo !empty($cep)?$cep: '';?>">
                        <?php if(!empty($cepErro)): ?>
                            <span class="help-inline"><?php echo $cepErro;?></span>
                            <?php endif;?>
                    </div>
                </div>
                
                <div class="form-actions">
                    <br/>

                    <button type="submit" class="btn btn-success">Adicionar</button>
                    <a href="index.php" type="btn " class="btn">Voltar</a>

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

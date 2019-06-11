<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulario - Cadastro</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/formulario2.css" />
</head>
<body>
    <div class="container">

        <img src="../img/perfil.png" alt="perfil">  

        <form class="form-horizontal" action="../create/cadastroLogin.php" method="post">    
            <div>
                <input type="text" name="cadastroCPF" id="cadastroCPF" placeholder="Digite seu CPF"> 
            </div>
        
            <div>
            <input type="text" name="cadastrousuario" id="email" placeholder="Escolha um login"> 
        </div>
        
        <div>
            <input type="password" name="cadastrosenha" id="senha" placeholder="Escolha uma senha">
        </div>
        <div class="form-actions">
            <button type="submit">Cadastrar</button>
        </div>
        <?php 
        if(@$_REQUEST['success'] == 'false'){
            echo "Não foi encontrado Funcionario com esse CPF";
            }
        ?>
</form>
        
    </div>


</body>
</html>

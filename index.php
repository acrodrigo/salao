<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulario - Login</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/formulario2.css" />
</head>
<body>
    <div class="container">

        <img src="img/perfil.png" alt="perfil">  

        <!--<form class="form-horizontal" action="editar/confirmarLogin.php" method="post">-->
        <!--<form class="form-horizontal" action="editar/confirmarLogin.php" method="post">-->
        <!--<form class="form-horizontal" action="editar/confirmarLogin.php" method="post">-->
        <form class="form-horizontal" action="indexAlt.php" method="post">   
            <div>
                <input type="text" name="usuario" id="email" placeholder="Digite seu login"> 
            </div>
            <div>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
            </div>
            <!--<form class="form-horizontal" action="editar/confirmarLogin.php" method="post">-->
            <!--<form class="form-horizontal" action="editar/confirmarLogin.php" method="post">-->
            <!--<form class="form-horizontal" action="editar/confirmarLogin.php" method="post">-->
                    
            <div class="form-actions">
                <button type="submit">Login</button>
            </div>
            <br>
            <?php 
                if(@$_REQUEST['success'] == 'false'){
                    echo "Login e/ou senha incorreto(s)";
                }
                ?>
            <a href="../html/cadastroLogin.php" class="btn">Cadastre-se</a>
          </form>
        
    </div>
   


</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Pegar valor digitado utilizando JavaScript. Dica 29</title>
        <script src="pegar.js"></script>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Pegar valor digitado utilizando JavaScript. Dica 29</h1>
            <input type="text" id=valor>
            <input type="submit" name="nome" onclick="capturar()" value="escreva algo">
            <p id="valorDigitado"></p>
            <script type="text/javascript">
                alert(#valorDigitado)
            </script>
            
            <?php
                
                $var = $_POST['nome'];
                echo $var;
            ?>
    </body>
</html>
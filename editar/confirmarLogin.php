<?php

include "../banco.php";

$funcionario  = array();

$funcionario['usuario'] = $_POST['usuario'];
$funcionario['senha'] = $_POST['senha'];


$confirmacao = confirmar_login($conexao, $funcionario);
$cont = 0;
foreach($confirmacao as $confirm){
     $cont++;
}

if($cont > 0){
    header('Location: ../cadastro.php');

}
else {
    echo "<script type='text/javascript'> alert('Teste'); </script>";
    header('Location: ../index.php?success=false');
    
    
}
?>

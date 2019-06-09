<?php

include "../banco.php";

$nota  = array();

$nota['idNota']=$_POST['idNota'];
$nota['Cliente_cpfCliente']=$_POST['Cliente_cpfCliente'];;
$nota['totalBruto']=$_POST['totalBruto'];;
$nota['totalLiquido']=$_POST['totalLiquido'];;
$nota['desconto']=$_POST['desconto'];; 
$nota['data']=$_POST['data'];

editar_nota($conexao, $nota);
header('Location: ../create/tabelaNotas.php');

?>
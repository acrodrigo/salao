<?php

include "../banco.php";

echo "Entrou aqui no Validar";

$nota = array();

$nota['Cliente_cpfCliente']=$_POST['Cliente_cpfCliente'];
$nota['totalBruto']=$_POST['totalBruto'];
$nota['desconto']=$_POST['desconto'];
$nota['totalLiquido']=$_POST['totalLiquido'];
$nota['data']=$_POST['data'];

gravar_nota($conexao, $nota);
header('Location: ../create/tabelaNotas.php');
?> 
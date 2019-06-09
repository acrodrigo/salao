<?php

include "../banco.php";

$produto  = array();

$produto['idProduto'] = $_POST['idProduto'];
$produto['nome'] = $_POST['nome'];
$produto['marca'] = $_POST['marca'];
$produto['preco'] = $_POST['preco'];
$produto['quantidade'] = $_POST['quantidade'];

editar_produto($conexao, $produto);

header('Location: ../create/tabelaProdutos.php');

?>
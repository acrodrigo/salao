<?php
//include "banco.php";

$lista_tarefas = buscar_produtos($conexao);

?>

<table class="table table-striped">
            
    <thead>
        <tr>
            <th scope="col">IdProdruto</th>
            <th scope="col">Nome</th>
            <th scope="col">Marca</th>
            <th scope="col">Preco</th>
            <th scope="col"> Editar </th>
            <th scope="col"> Excluir </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <td>
                <?php echo $tarefa['idProduto']; ?>
            </td>
            <td>
                <?php echo $tarefa['nome']; ?>
            </td>
            <td>
                <?php echo $tarefa['preco']; ?>
            </td>
            <td>
                <?php echo $tarefa['quantidade']; ?>
            </td>
            <td>
                <a href="editar/editarProduto.php?id=<?php echo $tarefa['idProduto']; ?>" class="btn btn-primary" href="#">Editar</a>
            </td>
            <td>
                <a href="remover/removerProduto.php?id=<?php echo $tarefa['idProduto']; ?>" class="btn btn-primary" href="#">Excluir</a>
                </td>
            </tr>
                        
        <?php endforeach; ?>
    </tbody>
</table>
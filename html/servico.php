<?php

$lista_tarefas = buscar_servicos($conexao);

?>

<table class="table table-striped">
            
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Comissao</th>
            <th scope="col"> Editar </th>
            <th scope="col"> Excluir </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <td>
                <?php echo $tarefa['idServico']; ?>
            </td>
            <td>
                <?php echo $tarefa['nome']; ?>
            </td>
            <td>
                <?php echo $tarefa['preco']; ?>
            </td>
            <td>
                <?php echo $tarefa['comissao']; ?>
            </td>
            <td>
                <a href="editar/editarServico.php?id=<?php echo $tarefa['idServico']; ?>" class="btn btn-primary" href="#">Editar</a>
            </td>
            <td>
                <a href="remover/removerServico.php?id=<?php echo $tarefa['idServico']; ?>" class="btn btn-primary" href="#">Excluir</a>
                </td>
            </tr>
                        
        <?php endforeach; ?>
    </tbody>
</table>
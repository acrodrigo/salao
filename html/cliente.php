<?php
//include "banco.php";

$lista_tarefas = buscar_clientes($conexao);

?>

<table class="table table-striped">
            
    <thead>
        <tr>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone1</th>
            <th scope="col">Telefone2</th>
            <th scope="col"> Editar </th>
            <th scope="col"> Excluir </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <td>
                <?php echo $tarefa['cpfCliente']; ?>
            </td>
            <td>
                <?php echo $tarefa['nome']; ?>
                <?php #echo utf8_encode($tarefa['nome']); ?>
            </td>
            <td>
                <?php echo $tarefa['telefone1']; ?>
            </td>
            <td>
                <?php echo $tarefa['telefone2']; ?>
            </td>
            <td>
                <a href="editar/editarCliente.php?id=<?php echo $tarefa['cpfCliente']; ?>" class="btn btn-primary" href="#">Editar</a>
            </td>
            <td>
                <a href="remover/removerCliente.php?id=<?php echo $tarefa['cpfCliente']; ?>" class="btn btn-primary" href="#">Excluir</a>
                </td>
            </tr>
                        
        <?php endforeach; ?>
    </tbody>
</table>
<?php
//include "banco.php";

$lista_tarefas = buscar_agendamentos($conexao);

?>

<table class="table table-striped">
            
    <thead>
        <tr>
            <th scope="col">ID </th>
            <th scope="col">Data-Hora</th>
            <th scope="col">CPF - Cliente</th>
            <th scope="col">idServico</th>
            <th scope="col">CPF - Funcionario</th>
            <th scope="col"> Editar </th>
            <th scope="col"> Excluir </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <td>
                <?php echo $tarefa['idAgendamento']; ?>
            </td>
            <td>
                <?php echo $tarefa['dataHora']; ?>
                <?php #echo utf8_encode($tarefa['nome']); ?>
            </td>
            <td>
                <?php echo $tarefa['Cliente_cpfCliente']; ?>
            </td>
            <td>
                <?php echo $tarefa['Servicos_idServico']; ?>
            </td>
            <td>
                <?php echo $tarefa['Funcionario_cpfFuncionario']; ?>
            </td>
            
            <td>
                <a href="editar/editarAgendamento.php?id=<?php echo $tarefa['idAgendamento']; ?>" class="btn btn-primary" href="#">Editar</a>
            </td>
            <td>
                <a href="remover/removerAgendamento.php?id=<?php echo $tarefa['idAgendamento']; ?>" class="btn btn-primary" href="#">Excluir</a>
                </td>
            </tr>
                        
        <?php endforeach; ?>
    </tbody>
</table>
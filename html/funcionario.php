<?php

//include "banco.php";

$lista_tarefas = buscar_funcionarios($conexao);

?>


<table class="table table-striped">
            
    <thead>
        <tr>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone1</th>
            <th scope="col">Telefone2</th>
            <th scope="col">Rua</th>
            <th scope="col">Bairro</th>    
            <th scope="col">CEP</th>
            <th scope="col"> Editar </th>
            <th scope="col"> Excluir </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
      
        <tr>
            <td>
                <?php echo $tarefa['cpfFuncionario'] ?>
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
                <?php echo $tarefa['rua']; ?>
            </td>
            <td>
                <?php echo $tarefa['bairro']; ?>
            </td>
            <td>
                <?php echo $tarefa['cep']; ?>
            </td>
            <!--
            <td>
                <?php// echo $tarefa['horarioini']; ?>
            </td>
            <td>
                <?php/// echo $tarefa['horariofim']; ?>
            </td> -->
            <td>
                <a href="editar/editarFuncionario.php?id=<?php echo $tarefa['cpfFuncionario']; ?>" class="btn btn-primary" href="#">Editar</a>
            </td>
            <td>
                <a href="remover/removerFuncionario.php?id=<?php echo $tarefa['cpfFuncionario']; ?>" class="btn btn-primary" href="#">Excluir</a>
            </td>
        </tr>
                        
        <?php endforeach; ?>
    </tbody>
</table>
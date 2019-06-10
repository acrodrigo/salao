<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tabela Clientes</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
</style>
<script type="text/javascript">

$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<?php 

include "../banco.php";
$lista_tarefas = buscar_funcionarios($conexao);	

?>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Gerenciamento Funcionario</h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar novo Cliente</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Remover</span></a>
						<a href="../index.php" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Voltar</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                        </th>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Telefone 1</th>
                        <th>Telefone 2</th>
						<th>Rua</th>
						<th>Bairro</th>
						<th>Cep</th>
						<th>Horario Chegada</th>
						<th>Horario de Saida</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
					<!-- Adicioanar while do php com a mysql_query-->
					<?php foreach ($lista_tarefas as $tarefa) : ?>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?php echo $tarefa['cpfFuncionario']; ?></td>
                        <td><?php echo $tarefa['nome']; ?></td>
						<td><?php echo $tarefa['telefone1']; ?></td>
                        <td><?php echo $tarefa['telefone2']; ?></td>
                        <td><?php echo $tarefa['rua']; ?></td>
                        <td><?php echo $tarefa['bairro']; ?></td>
						<td><?php echo $tarefa['cep']; ?></td>
						<td><?php echo $tarefa['horarioini']; ?></td>
						<td><?php echo $tarefa['horariofim']; ?></td>
						<td>
                            <a href="../editar/editarFuncionario.php?id=<?php echo $tarefa['cpfFuncionario']; ?>"  class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="../remover/removerFuncionario.php?id=<?php echo $tarefa['cpfFuncionario']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
					</tr>
					<?php endforeach; ?>
                    <!--Final-->
                </tbody>
            </table>
			<!--<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>-->
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="validarFuncionario.php" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Funcionario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>CPF</label>
							<input type="text" name="cpf" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="nome" name="nome" class="form-control" required>
                        </div>
						<div class="form-group">
							<label>Telefone 1</label>
							<input type="tel" name="telefone1" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Telefone 2</label>
							<input type="tel" class="form-control" name="telefone2">
						</div>
						<div class="form-group">
							<label>Rua</label>
							<input class="form-control" name="rua" required>
						</div>
						<div class="form-group">
							<label>Bairro</label>
							<input class="form-control" name="bairro" required>
						</div>
						<div class="form-group">
							<label>CEP</label>
							<input class="form-control" name="cep" required>
						</div>
						<div class="form-group">
							<label>Horario de Chegada</label>
							<input type="time" class="form-control" name="horarioini" min="9:00" max="18:00" required>
						</div>
						<div class="form-group">
							<label>Horario de Saida</label>
							<input type="time" min="7:00" max="20:00" class="form-control" name="horariofim" required>
						</div>
						
						<div class="control-group <?php echo (!empty($opcao1Erro) || !empty($opcao2Erro))?'error ': '';?>">
							<label for="funcao" class="control-label">Funcao </label>
							<br>
							<input type="radio" name="opcao" value="adm" required id="funcao"> Administrativo
							<input type="radio" name="opcao" value="sal"> Salão 
							<?php if(!(empty($opcao1Erro) || empty($opcao2Erro))): ?>
								<span class="help-inline"><?php echo $opcao1Erro; echo $opcao2Erro;?></span>
							<?php endif;?>
                		</div>

					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Adicionar">
					</div>
				</form>
			</div>
		</div>
	</div> 
	<!-- Edit Modal HTML 
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Editar Cliente</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
                            <div class="form-group">
                                <label>CpfCliente</label>
                                <input type="text" name="cpf" class="form-control" value="<?php echo $cliente['cpfCliente']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="nome" name="nome" class="form-control" value="<?php echo $cliente['nome']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Telefone 1</label>
                                <input type="text" name="telefone" class="form-control" value="<?php echo $cliente['telefone1'];?>" required>
                            </div>
                            <div class="form-group">
                                <label>Telefone 2</label>
                                <input class="form-control" name="telefone2" value="<?php $cliente['telefone2']; ?>" required>
                            </div>
                        </div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input href="../create/tabelaCliente.php?id=<?php echo $tarefa['cpfCliente']; ?>" type="submit" class="btn btn-info" value="Salvar">
					</div>
				</form>
			</div>
		</div>
	</div> -->
	<!-- Delete Modal HTML 
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Remover Cliente</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Você realmente que remover este cliente ?</p>
						<p class="text-warning"><small>Ação não pode ser desfeita</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" href="remover/removerCliente.php?id=<?php echo $tarefa['cpfCliente']; ?>" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Deletar">
					</div>
				</form>
			</div>
		</div>
	</div>-->
</body>
</html>                                		                            
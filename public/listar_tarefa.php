<?php require_once "../sistema_tarefa/tarefacontroller.php" ?>
<?php require_once "cabecalho_meta.php" ?>
<?php require_once "menu.php" ?>

<div class="container-fluid m-3">
    <div class="row">
        <div class="col-5">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Código tarefa</th>
                        <th scope="col">Status</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data de cadastro</th>
                        <th scope="col">Ações</th>
                    </tr>
                        <tbody>
                            <tr>
                                <td>Código da tarefa</td>
                                <td>
                                    <i class="material-icons text success" title="Iniciada">&#xe86c;</i>
                                </td>
                                <td>Descrição tarefa</td>
                                <td>Data de cadastro da tarefa</td>
                                <td>
                                    <i class="material-icons" title="Remover">&#xe872;</i>
                                    <i class="material-icons" title="Editar">&#xe3c9;</i>    
                                </td>                   
                            </tr>          
                        </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
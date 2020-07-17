<?php 
    require_once '../sistema_tarefa/tarefacontroller.php'; 
    require_once "cabecalho_meta.php"; 
    require_once "menu.php"; 
?>

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

                            <?php foreach($lista_tarefas as $indice => $tarefa) { ?>
                  
                                <tr>
                                    <td><?= $tarefa->CODIGO_TAREFA?></td>
                                    <td>
                                        <?php
                                            if($tarefa->CODIGO_ESTADO = 1)
                                                echo '<i class="material-icons text-success" title="Iniciada">&#xe86c;</i>';
                                            if($tarefa->CODIGO_ESTADO = 2)
                                                echo '<i class="material-icons text-danger" title="Pausada">&#xe86c;</i>';
                                            if($tarefa->CODIGO_ESTADO = 3)
                                                echo '<i class="material-icons text-warning" title="Pendente">&#xe86c;</i>';
                                            if($tarefa->CODIGO_ESTADO = 4)
                                                echo '<i class="material-icons text-primary" title="Processada">&#xe86c;</i>';
                                            if($tarefa->CODIGO_ESTADO = 5)
                                                echo '<i class="material-icons text-secundary" title="Finalizada">&#xe86c;</i>';
                                        ?>      
                                    </td>
                                    <td><?= $tarefa->DESCRICAO_TAREFA; ?></td>
                                    <td><?= $tarefa->DATA_CADASTRO;?></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#modalRemover" onclick="modalRemover(<?= $tarefa->CODIGO_TAREFA;?>)">
                                            <i class="material-icons" title="Remover">&#xe872;</i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#modalAtualizar" onclick="modalAtualizar(<?= $tarefa->CODIGO_TAREFA;?>, <?= $tarefa->CODIGO_ESTADO;?>, <?= $tarefa->DESCRICAO_TAREFA;?>)">
                                            <i class="material-icons" title="Editar">&#xe3c9;</i> 
                                        </a>   
                                    </td>                   
                                </tr>
                        <?php } ?>          
                        </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalRemover" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="..\sistema_tarefa\tarefacontroller.php" method="GET">
            <div class="form-group">
                <label for="codigo_tarefa">Código tarefa</label>
                <input type="text" name="codigo_tarefa" class="form-control" id="codigo_tarefa" arial-describedby="emailHelp" value= "<?= $tarefa->CODIGO_TAREFA;?>" >
            </div>

            <div class="form-group">
                <label for="descricao_tarefa">Código tarefa</label>
                <input type="text" name="descricao_tarefa" class="form-control" id="descricao_tarefa" arial-describedby="emailHelp" value= "<?= $tarefa->descricao_tarefa;?>" >
            </div>

            <div class="form-group">
                <label for="codigo_estado">Código tarefa</label>
                <select name="codigo_estado" id="codigo_estado" class="form-control">
                    <option value="1">1- Iniciada</option>
                    <option value="2">2- Pausada</option>
                    <option value="3">3- Pendente</option>
                    <option value="4">4- Processada</option>
                    <option value="5">5- Finalizada</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" name="botao" value="Atualizar">
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    function modalAtualizar(codigo_tarefa, codigo_estado, descricao_tarefa){
        document.getElementById('codigo_tarefa').value = codigo_tarefa;
        document.getElementById('codigo_estado').value = codigo_estado;
        document.getElementById('descricao_tarefa').value = descricao_tarefa;
    }
</script>
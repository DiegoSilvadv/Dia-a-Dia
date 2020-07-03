<?php require_once "../sistema_tarefa/tarefacontroller.php" ?>
<?php require_once "cabecalho_meta.php" ?>
<?php require_once "menu.php" ?>

<div class="container-fluid m-3">
    <div class="row">
        <div class="col-3">
            <form action="../sistema_tarefa/tarefacontroller.php" method="get">
                <div class="form-group">
                    <label for="descricao_tarefa"></label>
                    <input type="text" name="descricao_tarefa" class="form-control" id="descricao_tarefa">
                </div>
                <input type="submit" class="btn btn-primary" name="botao" value="salvar">
            </form>
        </div>
    </div>
</div>

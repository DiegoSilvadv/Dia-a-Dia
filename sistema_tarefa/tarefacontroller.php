<?php

    if(!isset($_GET["botao"])){
        header("Location: ../public/index.php");
        exit();
    }
    $acao = $_GET["botao"];

    require_once "../vendor/autoload.php";
    
    $tarefa = new sistema_tarefa\Tarefa();
    $tarefa_service = new sistema_tarefa\TarefaService(sistema_tarefa\Conexao::getInstance(), $tarefa);
    
    if($acao == "salvar"){
        $tarefa->__set('descricao_tarefa', $_GET['descricao_tarefa']);
        $tarefa_service->insert();
        header('Location: ../public/listar_tarefa.php?botao=buscar');
    }

    if($acao == "atualizar"){
        $tarefa->__set('codigo_tarefa', $_GET['codigo_tarefa']);
        $tarefa->__set('codigo_estado', $_GET['codigo_estado']);
        $tarefa->__set('descricao_tarefa', $_GET['descricao_tarefa']);

        $tarefa_service->update();
        header('Location: ../public/listar_tarefa.php?botao=buscar');


    }

    if($acao == "buscar"){
        $lista_tarefas = $tarefa_service->select();
    }
    
    if($acao == "remover"){
        $tarefa_service->delete($_GET['codigo_tarefa']);
        $lista_tarefas = $tarefa_service->select();
        header('Location: ../public/listar_tarefa.php?botao=buscar');
    }

?>
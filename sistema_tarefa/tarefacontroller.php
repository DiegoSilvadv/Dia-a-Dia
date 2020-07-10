<?php
    require_once ("../vendor/autoload.php");

    echo "ola";
    // $tarefa = new sistema_tarefa\Tarefa();
    $tarefa_service = new sistema_tarefa\tarefa_service(sistema_tarefa\Conexao::getInstance(), $tarefa);

    echo var_dump($tarefa);
    echo "<br /><br />";
    echo var_dump($tarefa_service);

?>
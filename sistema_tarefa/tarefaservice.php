<?php
namespace sistema_tarefa;
use PDO;

class TarefaService {
    //atributos
    private $conexao;
    private $tarefa;

    //metodo construtor
    public function __construct($conexao, $tarefa){
        $this->conexao = $conexao;
        $this->tarefa = $tarefa;
    }

    //CRUD
    public function insert(){
        $sql = "INSERT INTO TAREFA(DESCRICAO_TAREFA) VALUES(:descricao_tarefa)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':descricao_tarefa', $this->tarefa->__get('descricao_tarefa'));
        $stmt->execute();
    }
    public function update(){
        $sql = "UPDATE TAREFA SET CODIGO_ESTADO = :codigo_estado, DESCRICAO_TAREFA:descricao_tarefa WHERE CODIGO_TAREFA = :codigo_tarefa";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':codigo_tarefa', $this->tarefa->__get('codigo_tarefa'));
        $stmt->bindValue(':codigo_estado', $this->tarefa->__get('codigo_estado'));
        $stmt->bindValue(':descricao_tarefa', $this->tarefa->__get('descricao_tarefa'));
        $stmt->execute(); 
    }
    public function delete($codigo_tarefa){
        $sql = "DELETE FROM TAREFA WHERE CODIGO_TAREFA = :codigo_tarefa";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':codigo_tarefa', $codigo_tarefa);
        $stmt->execute();
    }
    public function select($codigo_tarefa = null){
        $sql = "SELECT * FROM tarefa";

        if($codigo_tarefa != null)
            $sql.= "WHERE CODIGO_TAREFA = :codigo_tarefa";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':codigo_tarefa', $codigo_tarefa);
        $stmt->execute();
        $stmt->fetch();
        return $stmt;
    }

}


?>
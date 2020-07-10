<?php
    namespace sistema_tarefa;

    class Tarefa {
        private $codigo_tarefa;
        private $codigo_estado;
        private $descricao_tarefa;

        public function __get($atributo){
            return $this->$atributo;
        } 
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
    }
    
?>
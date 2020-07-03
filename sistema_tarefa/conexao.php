<?php
    namespace Connect;
    use \PDO;
    use \PDOException;

    class Connect {
        const host = 'localhost';
        const database = 'GERENCIADOR_TAREFAS';
        const user = 'root';
        const password = '';
        const charset = 'utf8mb4';

        // deixa o banco de dados como utf8
        const options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            // capaz de pegar o erro do select ou de um insert etc
            PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_CASE=>PDO::CASE_NATURAL
        ];



        public static $instance;

        public static function getInstance (){
            if(empty(self::$instance)) {
                try {
                    self::$instance = new PDO (
                        "mysql:host=" . self::host . "; dbname=" .self::database. "; port=3308" . "; charset=" . self::charset . "",
                         self::user, self::password, self::options
                    );
                } catch (PDOException $error) {
                    echo $error->getMessage();
                }
                return self::$instance;
            }

        } 
        
        final private function __construct(){}
        final private function __clone(){}
        
    }










?>
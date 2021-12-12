<?php

    class Connection {

        public function dbConnection(){
            try{
                
                $connection = new \PDO(
                    //Configuração de conecçao com banco de dados
                    "mysql: host=localhost, dbname=user_login_test, charset=utf8",
                    "root",
                    ""

                );
                return $connection;

            } catch (\PDOException $e){
                echo "Erro", $e;
            }
        }
    }
?>
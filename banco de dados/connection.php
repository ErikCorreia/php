<?php

    class Connection {
        function dbConnection(){
            try{

                $connection = new \PDO(
                    //Passar como parâmetros "o tipo de conexao(mysql), o host(localhost), e colation(utf8)"
                    "mysql: host=localhost, dbname=user_login_test, charset=utf8",
                    //Nome do usuario do banco de dados
                    "root",
                    //Senha de acesso ao banco de dados
                    ""
                );
                return $connection;
              

            } catch(Exception $e){

            }
        }
        function checkAll(){
            $query = "SELECT * FROM usuarios";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();

        }
    }
    
    class User {
       
    }
    
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
?>
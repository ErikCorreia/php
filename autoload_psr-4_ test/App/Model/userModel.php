<?php

    namespace App\Model;

    class User {

        private $username;
        private $email;
        private $password;

        public function __construct($username, $email, $password) {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;   
        }
        public function getUser() {
            echo "$this->username <br/>";
            echo "$this->email <br/>";
            echo "$this->password <br/>";
        }
        
    }

?>
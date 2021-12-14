<?php

    echo "<h1>Conteudo do formulario</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "<hr/>";

    //Validar o formulário e redirecionar o usuario para pagina de cadastro com sucesso

    echo '<h2>Olá '.$_POST['username'].'. Inserimos seus dados no  banco de dados </h2>';

    $error = array();

    if(isset($_POST)){
       
        if(strlen($_POST['password']) < 6){
            header('location:/?login=error&username='.$_POST['username'].'&email='.$_POST['email']);
        }
        
        if(strlen($_POST['username']) < 6){
            header('location:/?login=invalid_username&username='.$_POST['username'].'&email='.$_POST['email']);
        }

    }

?>
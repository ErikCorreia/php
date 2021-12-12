<?php

    echo "<h1>Conteudo do formulario</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "<hr/>";

    echo '<h2>Olá '.$_POST['username'].'. Enviamos um email de verificação para '.$_POST['email'].'</h2>';
    if(strlen($_POST['password']) < 6){
        header('location:/?login=error');
    }

?>
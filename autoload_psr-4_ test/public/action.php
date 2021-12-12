<?php

    require('../vendor/autoload.php');

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $user = new App\Model\User($_POST['username'], $_POST['email'], $_POST['password']);

    $user->getUser();

?>
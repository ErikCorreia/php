<?php

    echo "<h1>Formulário</h1> <hr/>";

?>

<link rel="stylesheet" href="index.css">

<form action="formAction.php" method="post">
    <input type="text" name="username" value="<?= $_GET ? $_GET['username'] :null; ?>" placeholder="Username" />
    <input type="email" name="email" value="<?= $_GET ? $_GET['email'] :null; ?>" placeholder="Email" />
    <input type="password" name="password" placeholder="Password" />

    <?php if(isset($_GET['login']) && $_GET['login'] === 'error') { ?>
        <small style="color: red;">A senha deve ter pelo menos 6 caracteres</small>
    <?php } ?>
    <?php if(isset($_GET['login']) && $_GET['login'] === 'invalid_username') { ?>
        <small style="color: red;">Username deve ter ao menos 6 caracteres</small>
    <?php } ?>

    <button type="submit">Enviar</button>
</form>

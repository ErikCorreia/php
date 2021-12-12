<?php

    echo "<h1>Formularios</h1> <hr/>";
?>

<link rel="stylesheet" href="index.css">

<form action="formAction.php" method="post">
    <input type="text" name="username" placeholder="Username" />
    <input type="email" name="email" placeholder="Email" />
    <input type="password" name="password" placeholder="Password" />

    <?php if(isset($_GET['login']) && $_GET['login'] === 'error') { ?>
        <small style="color: red;">senha invalida</small>
    <?php } ?>

    <button type="submit">Submit</button>
</form>

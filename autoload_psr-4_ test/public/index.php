<?php

    $arr = array("Banena", "abacaxi", "manga", "maçã");

    echo '<h1>Array de frutas</h1>';
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    echo '<hr/>';
    
    echo '<h2>Loop no array de frutas</h2>';

    foreach($arr as $key => $value){
        echo "$value <br>";
    }

?>

<form action="action.php" method="post">
    <input type="text" placeholder="username" name="username"/>
    <input type="email" placeholder="email" name="email"/>
    <input type="password" placeholder="password" name="password"/>
    <button type="submit" name="">Submit</button>
</form>

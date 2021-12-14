<?php

    $url = 'https://www.canalti.com.br/api/pokemons.json';
    $pokemons = json_decode(file_get_contents($url)) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container">
        
            <?php foreach($pokemons->pokemon as $pokemon){ ?>
                <div class="card">
                    <div class="card-img">
                        <img src="<?= $pokemon->img ?>"/>
                    </div>
                    <div class="card-data">
                        <h4><?= $pokemon->name ?></h4>
                        <h5>Altura: <?= $pokemon->height ?></h5>
                        <h5>Peso: <?= $pokemon->weight ?></h5>
                        
                        <h5>Tipo: <?php foreach($pokemon->type as $type){ ?><small style="border: 1px solid #1a1a1a; margin: 3px; padding: 3px; "><?= $type.' ' ?></small><?php } ?></h5>
                    </div>
                </div>
            <?php } ?>
        
    </div>
</body>
</html>
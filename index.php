<?php

function concatChain($ReturnChain1, $ReturnChain2) {
    return '<p>Récupération de mes deux chaines : </p><p>' . $ReturnChain1 . '</p> ' . $ReturnChain2 . '!';
}
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 4 exercice 3</title>
    </head>
    <body>
        <div align="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 4 exercice 3</h1>
                    </div>
                </div>
                <div align="center">
                    <p class="text">Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines</p>
                </div>
                <?php
                $chainOne = 'Ma première chaine de caractère';
                $chainTwo = 'Et là ma deuxième chaine de caractère';
                echo concatChain($chainOne, $chainTwo);
                ?>
            </div>
        </div>
    </div>
</body>
</html>

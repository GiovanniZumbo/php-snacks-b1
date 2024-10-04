<?php
include_once "classes.php";
?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
</head>


<body>
    <main>
        <div class="container">
            <h1>Classi</h1>
            <?php foreach ($classi as $classe) { ?>

                <div class="class border border-primary rounded-2 mb-3 p-2">

                    <?php foreach ($classe as $alunno) { ?>
                        <div class="alumn border border-info rounded 2 mb-2 p-2">
                            <ul class="list-unstyled">
                                <li>Nome: <?= $alunno["nome"] ?></li>
                                <li>Cognome: <?= $alunno["cognome"] ?></li>
                                <li>Anni: <?= $alunno["anni"] ?></li>
                                <li>Voto medio: <?= $alunno["voto_medio"] ?></li>
                                <li>Linguaggio preferito: <?= $alunno["linguaggio_preferito"] ?></li>
                                <li>Foto: <img src="<?= $alunno["immagine"] ?>" alt=""></li>
                            </ul>
                        </div>
                    <?php } ?>
                </div>

            <?php } ?>
        </div>
    </main>
</body>

</html>
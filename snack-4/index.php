<?php
include_once "classes.php";

$classiFiltrate;

// //Filtro voto medio >= di 6
// if (isset($_GET["votosufficiente"]) && ($_GET["votosufficiente"] === "on")) {
//     // Creo un array dove mettere tutte le classi filtrate
//     $classiFiltrate = [];
//     // Cerco in tutte le classi, le classi che contengono gli studenti richiesti
//     foreach ($classi as $classe => $alunni) {
//         // Creo un array con gli studenti che hanno la sufficienza
//         $classiFiltrate[$classe] = [];
//         // Cerco in ogni classe gli studenti richiesti
//         foreach ($alunni as $alunno) {

//             if ($alunno["voto_medio"] >= 6) {
//                 //inserisco l'alunno dentro l'array filtrato
//                 array_push($classiFiltrate[$classe], $alunno);
//             }
//         }
//     }
// } else {
//     $classiFiltrate = $classi;
// }

//Filtro voto massimo
// ! Verifico che la variabile sia settata e sia un numero
if (isset($_GET["votomassimo"]) && is_numeric($_GET["votomassimo"])) {
    // Creo un array dove mettere tutte le classi filtrate
    $classiFiltrate = [];
    // Cerco in tutte le classi, le classi che contengono gli studenti richiesti
    foreach ($classi as $classe => $alunni) {
        // Creo un array con gli studenti che hanno la sufficienza
        $classiFiltrate[$classe] = [];
        // Cerco in ogni classe gli studenti richiesti
        foreach ($alunni as $alunno) {

            if ($alunno["voto_medio"] <= $_GET["votomassimo"]) {
                //inserisco l'alunno dentro l'array filtrato
                array_push($classiFiltrate[$classe], $alunno);
            }
        }
    }
} else {
    $classiFiltrate = $classi;
}



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

            <form class="my-2" action="index.php" method="GET">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="votosufficiente" id="votosufficiente">
                    <label class="form-check-label" for="votosufficiente">
                        Voto medio almeno 6.0
                    </label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Inserisci il voto medio massimo</label>
                    <input type="number" class="form-control" id="votomassimo" name="votomassimo" min="0" max="10" step="0.1">
                </div>
                <div>

                </div>

                <button type="submit" class="btn btn-primary">Cerca</button>
            </form>
            <?php foreach ($classiFiltrate as $nomeClasse => $alunni) { ?>

                <div class="class border border-primary rounded-2 mb-3 p-2">

                    <?php foreach ($alunni as $alunno) { ?>
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
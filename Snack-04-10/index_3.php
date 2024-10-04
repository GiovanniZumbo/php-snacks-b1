<?php

include "./staff.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
</head>

<body>
    <h2>Insegnanti</h2>

    <div class="border border-dark">
        <?php foreach ($db as $teachers => $teacherInDb) { ?>
            <ul>
                <?php foreach ($teacherInDb as $teacher) { ?>
                    <li> Nome: <?= $teacher["name"] ?></li>
                    <li> Cognome: <?= $teacher["lastname"] ?></li>
                <?php } ?>
                <li></li>
            </ul>
        <?php  } ?>


    </div>

    <h2>PM</h2>

</body>

</html>
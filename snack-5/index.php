<?php require_once "./functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
</head>

<body>
    <main>
        <div class="container">
            <h1>Parola palindroma</h1>

            <h4>Verifica se la tua parola è palindroma</h4>

            <form action="index.php" method="get">
                <input type="text" class="form-control mb-3" name="userword">
                <button class="btn btn-success">Verifica</button>
            </form>

            <div>
                <?php if  { ?>

                <p>La tua parola è palindroma</p>
                <?php  } else { ?>
                    <p>La tua parola non è palindroma</p>
                <?php } ?>
            </div>
        </div>
    </main>

</body>

</html>
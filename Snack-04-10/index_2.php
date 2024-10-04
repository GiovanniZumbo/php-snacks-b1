<?php
$message = '';
$username = $_GET["username"];
$mail = $_GET["usermail"];
$age = $_GET["userage"];
$needles = ["@", "."];

if (strlen($username) > 3 && is_numeric($age) &&  str_contains($mail, "@") &&  str_contains($mail, "" . "")) {
    $message = "Accesso riuscito";
} else {
    $message = "Dati non validi";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <form action="index_2.php" method="get">
        <input type="text" name="username" id="username" placeholder="name">
        <input type="mail" name="usermail" placeholder="e-mail">
        <input type="number" name="userage" min=0 placeholder="age">
        <button type="submit">Invia</button>
    </form>

    <p>"<?= $message ?>"</p>
</body>

</html>
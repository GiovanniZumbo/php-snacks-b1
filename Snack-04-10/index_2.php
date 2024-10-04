<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <form action="verify.php" method="get">
        <input type="text" name="username">
        <input type="mail" name="usermail">
        <input type="number" name="userage" min=0>
        <button type="submit">Invia</button>
    </form>

    <p>"<?= $message ?>"</p>
</body>

</html>
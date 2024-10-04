<?php
$message = '';
$username = $_GET["username"];


if (strlen($username) > 3) {
    $message = "Accesso riuscito";
} else {
    $message = "Il nome inserito non è valido";
}

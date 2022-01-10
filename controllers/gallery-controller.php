<?php
session_start();
//? on créer un tableau contenant tout les fichiers 
$allFiles = scandir("../img/");
$usersPicture = [];
//? on parcours le tableau allFiles et lorsque la value contient le login
//? on stock la value dans le tableau usersPicture
foreach ($allFiles as $value) {
    if (stristr($value, $_SESSION['login'] . '_')) {
        array_push($usersPicture, $value);
    }
}
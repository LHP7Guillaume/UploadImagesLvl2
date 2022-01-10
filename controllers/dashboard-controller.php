<?php

if (!isset($_SESSION["login"])) {
    header("Location: no-allowed.php");
}

//? on créer un tableau contenant tout les fichiers 
$allFiles = scandir("../img/");
$userPicture = [];
//? on parcours le tableau allFiles et lorsque la value contient le login
//? on stock la value dans le tableau usersPicture
foreach ($allFiles as $value) {
    if (stristr($value, $_SESSION['login'] . '_')) {
        array_push($userPicture, "../img/" . $value);
    }
}
//? je créer un nouveau tableau contenant la taille des img de user j'utilise la fonction array_map pour appliqué fileSize à toutes les valeurs de userPicture
$userPictureSize = array_map("filesize", $userPicture);
$quota = 0;
//? a l'aide d'une boucle foreach j'additionne tout les valeurs du tableau dans quota
foreach ($userPictureSize as $value) {
    $quota += $value;
}
//? nous avons arrondie quota au 100eme
$quota = round($quota / (1024 * 1024), 2);
//? on compte les elements dans le tableau usersPicture
$totalPicture = count($userPicture);
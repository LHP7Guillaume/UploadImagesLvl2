<?php
require_once('../controllers/gallery-controller.php')
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Deconnexion</title>
</head>

<body>
    <h1>allPIX</h1>
    <?php
    //? Je parcours le tableau usersPicture et j'affiche
    //? le nom de l'image dans le src de l'image dans le echo court
    foreach ($usersPicture as $value) { ?>
        <div><img src="../img/<?= $value ?>" class="w-25"></div>
    <?php } ?>

    <div>
        <a href="dashboard.php" type="submit" class="btn btn-primary">Retour</a>
    </div>
    <br>
    <div>
        <a href="deconnexion.php" type="submit" class="btn btn-primary">Déconnexion</a>
    </div>
    <script src="../assets/js/uploadPreview.js"></script>
</body>

</html>
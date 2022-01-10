<?php
session_start();
require_once("../controllers/dashboard-controller.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/style.css">

    <title>UploadLvl2</title>
</head>

<body>

    <div class="container d-flex justify-content-center">

        <div class="col-lg-5 myColorindex">

            <h1 class="textBoiteaimage text-center">Ma boite à images</h1>
            <h2 class="textBoiteaimage text-center pb-5">Bonjour <?= $_SESSION["login"] ?></h2>

            <p class="textBoiteaimage mt-5"><?= $quota ?>/ <?= $_SESSION["quota"] ?> MO</p>
            <p>Formule : <?= $_SESSION["formule"] ?></p>
            <p class="textBoiteaimage">Vous avez : <?= $totalPicture ?> Image(s)</p>

            <div>
                <a href="upload.php" type="submit" class="btn btn-primary">Upload</a>
            </div>
            <br>
            <div>
                <a href="gallery.php" type="submit" class="btn btn-primary">Galerie</a>
            </div>
            <br>
            <div class="text-end m-3">
                <a href="deconnection.php"  name="btn-submit" class=" btn btn-primary">deconnexion</a>
            </div>
        </div>
    </div>

    <script src="../assets/js/uploadPreview.js"></script>

</body>

</html>
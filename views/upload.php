<?php
session_start();
var_dump($_SESSION);

require_once('../controllers/upload-controller.php');

if (!isset($_SESSION["login"])) {
    header("Location: no-allowed.php");
}

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

    <p>Bonjour, <?= $_SESSION["login"] ?></p>

    <form action="" enctype="multipart/form-data" method="post">

        Votre image :
        <div>
            <img id="imgPreview" class="w-25">
        </div>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <div>
            <input type="submit" value="Upload" name="submit">
        </div>
    </form>
    <div>
        <p><?= $messageDetail ?? '' ?></p>
        <p><span class="text-danger"><?= $messageInfo ?? '' ?></span></p>

    </div>

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
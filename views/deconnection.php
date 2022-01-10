<?php
session_start();
session_unset();
session_destroy();
var_dump($_SESSION)
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Deconnexion</title>
    <title>Upload-1</title>
</head>

<body>
    <h1>allPIX</h1>

    <p>Vous étes déconnecter</p>

    <a href="../index.php" type="submit" class="btn btn-primary">Connexion</a>

    <script src="./assets/js/uploadPreview.js"></script>
</body>

</html>
<?php

require_once('my-config.php');
require_once('controllers/index-controller.php');

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

    <link rel="stylesheet" href="assets/style.css">

    <title>UploadLvl2</title>
</head>

<body>

    <div class="container d-flex justify-content-center">

        <div class="col-lg-5 myColorindex">

            <h1 class="textBoiteaimage text-center">Ma boite à images</h1>

            <form class="col-lg-5" action="" method="post">

                <div class="mb-3 textBoiteaimage">
                    <label for="login" class="form-label">Login</label>
                    <input name="login" type="text" class="form-control " id="login">
                </div>

                <div class="mb-3 textBoiteaimage">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>

                <div class="text-center">
                    <input type="submit" value="connexion" name="btn-submit" class=" btn btn-primary">
                </div>
            </form>
        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./img/header/clothes.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <title>Inscription</title>

</head>

<body>

    <?php

    include("./header.php")

    ?>

    <div class="d-flex justify-content-center align-items-center vh-100">

        <form class="shadow w-450 p-3" action="php/signup.php" method="post">

            <h2 style="font-family: 'Audiowide', sans-serif;" class="display-4  fs-1">Inscription</h2><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Prénom / Nom</label>
                <input type="text" class="form-control" name="fname" value="<?php echo (isset($_GET['fname'])) ? $_GET['fname'] : "" ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Pseudo</label>
                <input type="text" class="form-control" name="uname" value="<?php echo (isset($_GET['uname'])) ? $_GET['uname'] : "" ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Mot de Passe</label>
                <input type="password" class="form-control" name="pass">
                <div id="" class="form-text">Ne partager jamais votre mot de passe</div>
            </div>

            <button style="background-color: #c79c2c; margin-right: 15px" type="submit" class="btn">S'inscrire</button>
            <a href="login.php" class="link-secondary">Se connecter</a>
        </form>
    </div>
</body>

</html>
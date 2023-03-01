    <?php
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
    ?>

        <!DOCTYPE html>
        <html lang="en">

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
            <title>Clothes</title>
        </head>

        <body>

            <header>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="home.php"><img src="./img/clothes.png" class="logo" alt="logo" /></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="woman.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Femmes
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="./top_woman.php">Hauts</a></li>
                                        <li><a class="dropdown-item" href="#">Bas</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Chaussures</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Hommes
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Hauts</a></li>
                                        <li><a class="dropdown-item" href="#">Bas</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Chaussures</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Accessoires</a>
                                </li>
                            </ul>
                            <div class="d-flex">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item btn"> <a class="nav-link" href="account.php"><img src="./img/user.svg" alt="user" />Mon compte</a></li>
                                    <li class="nav-item btn"> <a class="nav-link" href="shop.php"><img src="./img/shop.svg" alt="shop" />Mon panier</a></li>
                                    <li class="nav-item btn"> <a class="nav-link" href="logout.php"><img src="./img/logout.svg" alt="logout" />Déconnexion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <main>

                <h6 style="font-family: 'Audiowide', sans-serif; margin-top:20px" class="text-muted">Bonjour, <?= $_SESSION['fname'] ?></h6>

                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 style="font-family: 'Audiowide', sans-serif; margin-bottom:30px" class="fw-light">BEST OUTFIT</h1>
                            <p style="margin-bottom:30px" class="lead text-muted">La mode est une forme d'expression de soi à une période particulière d'autonomie. Montrer votre style</p>
                            <img src="./img/model.png" class="img-fluid" alt="model">
                            <p style="margin-top: 30px;" class="text-muted">"Des vêtements finement confectionnés, influencés par la culture populaire, la mode de rue et les fashionistas haut de gamme."</p>
                        </div>

                        <div class="numbers-contain">
                            <div class="left">
                                <div class="numbers">
                                    <p id="value"></p>
                                    <p class="unite">K+</p>
                                </div>
                                <p>Clients Satisfaits</p>
                            </div>

                            <div class="rigth">
                                <div class="numbers">
                                    <p id="second-value"></p>
                                    <p class="unite">K+</p>
                                </div>
                                <p>Chart products</p>
                            </div>
                        </div>
                    </div>


                    <button class="started"><a class="nav-link" href="shop.php">GET STARTED</a></button>
                    </div>
                    </div>
                </section>

                <section class="py-5 text-center bg-secondary">
                    <h2 style="font-family: 'Audiowide', sans-serif; text-decoration: underline; text-decoration-color: #c79c2c;">Partner Brands</h2>
                    <div style="margin-top: 50px; display:flex; justify-content:space-around">
                        <img src="./img/brand/nike.png" style="height : 60px" alt="nike" />
                        <img src="./img/brand/jordan.png" style="height : 60px" alt="jordan" />
                        <img src="./img/brand/levis.png" style="height : 60px" alt="levis" />
                        <img src="./img/brand/adidas.png" style="height : 60px" alt="adidas" />
                        <img src="./img/brand/tommy.png" style="height : 60px" alt="tommy" />

                    </div>
                </section>
            </main>


            <?php
            include("./footer.php")
            ?>

        </body>

        <script src=" script.js">
        </script>

        </html>

    <?php } else {
        header("Location: login.php");
        exit;
    } ?>
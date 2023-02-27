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
        <link rel="icon" href="../img/clothes.png" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../woman.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
        <title>Femmes</title>
    </head>

    <body>

        <?php
        include("./header.php")
        ?>

        <main>
            <h6 style="font-family: 'Audiowide', sans-serif; margin-top:20px" class="text-muted">Bonjour, <?= $_SESSION['fname'] ?></h6>

            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 style="font-family: 'Audiowide', sans-serif; margin-bottom:30px" class="fw-light">Femmes</h1>
                        <p style="margin-bottom:30px" class="lead text-muted">Les vêtements femme sélectionnés par nos soins vont vous permettre d'opter pour un style tendance tout en respectant la planète et les hommes</p>
                        <img src="./img/womans/womans.jpg" class="img-fluid" alt="womans">
                    </div>
                </div>
            </section>

            <section class="choices">
                <h2 class=" text-center " style=" font-family: 'Audiowide' , sans-serif; text-decoration: underline; text-decoration-color: #c79c2c; margin-bottom:20px; margin-top:20px">Nos Catégories</h2>

                <div class="card-contain">
                    <div class="wrap">
                        <div class="side-a"></div>
                        <div class="side-b">
                            <a href="" class="link btn">Nos Hauts</a>
                        </div>
                    </div>
                    <div class="wrap">
                        <div class="side-c"></div>
                        <div class="side-d">
                            <a href="" class="link btn">Nos Bas</a>
                        </div>
                    </div>
                    <div class="wrap">
                        <div class="side-e"></div>
                        <div class="side-f">
                            <a href="" class="link btn">Nos Chaussures</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </body>

    <script src=" script.js">
    </script>

    </html>

<?php } else {
    header("Location: login.php");
    exit;
} ?>
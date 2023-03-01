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

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style>
    </head>

    <body>

        <?php
        include("./header.php")
        ?>

        <main>
            <h6 style="font-family: 'Audiowide', sans-serif; margin-top:20px" class="text-muted">Bonjour, <?= $_SESSION['fname'] ?></h6>


            <?php
            include("woman.php")
            ?>

            <section style="margin-top: 30px; margin-bottom: 30px;">
                <h3 style="text-align: center; color: #c79c2c; font-family: Audiowide, sans-serif;">Nos hauts</h3>


                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <?php

                    require_once "db_conn.php";

                    // Nombre de produits par page
                    $products_per_page = 6;

                    try {
                        // Obtenir le nombre total de produits
                        $total_products = $conn->query("SELECT COUNT(*) as count FROM top_womans")->fetch()['count'];

                        // Obtenir le numéro de la page à partir des paramètres GET
                        $page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;

                        // Calculer l'offset pour la requête SQL
                        $offset = ($page_number - 1) * $products_per_page;

                        // Sélectionnez les produits pour la page actuelle
                        $stmt = $conn->prepare("SELECT * FROM top_womans LIMIT :offset, :products_per_page");
                        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
                        $stmt->bindParam(':products_per_page', $products_per_page, PDO::PARAM_INT);
                        $stmt->execute();

                        // Vérifiez si des données ont été retournées
                        if ($stmt->rowCount() > 0) {

                            // Parcourez les données et affichez-les
                            while ($row = $stmt->fetch()) {
                                echo "<div class='col'>";
                                echo "<div class='card shadow-sm'>";
                                echo "<div style='align-items: center;' class='card-body'>";
                                echo '<img class="products" src="data:image/png|image/jpg|image/jpeg;base64,' . base64_encode($row['image_data']) . '" style="height:250px; display:block; margin: 0 auto;""/>';
                                echo "<h4 style='text-align: center; font-family: Audiowide, sans-serif;'>" . $row['title'] . "</h4>";
                                echo "<p style='color : #c79c2c; text-align: center'>" . $row['description'] . "</p>";
                                echo "<button style='margin-right: 70%' type='button' class='btn btn-sm'>";
                                echo "<img src='./img/shop.svg' alt='shop' />";
                                echo "</button>";
                                echo "<small style='font-weight:bold; font-size: 16px'>" . $row['price'] . "€" . "</small>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }

                            // Afficher les liens de pagination
                            $total_pages = ceil($total_products / $products_per_page);
                            echo '<nav style="margin-top:50px" aria-label="Page navigation example">';
                            echo '<ul class="pagination justify-content-center">';

                            if ($page_number == 1) {
                                echo '<li class="page-item disabled">';
                            } else {
                                echo '<li class="page-item">';
                            }
                            echo '<a class="page-link" href="?page=' . ($page_number - 1) . '" tabindex="-1">Previous</a>';
                            echo '</li>';

                            for ($i = 1; $i <= $total_pages; $i++) {
                                $active = ($page_number == $i) ? " active" : "";
                                echo '<li class="page-item' . $active . '"><a href="?page=' . $i . '" class="page-link">' . $i . '</a></li>';
                            }

                            if ($page_number == $total_pages) {
                                echo '<li class="page-item disabled">';
                            } else {
                                echo '<li class="page-item">';
                            }
                            echo '<a class="page-link" href="?page=' . ($page_number + 1) . '">Next</a>';
                            echo '</li>';

                            echo '</ul>';
                            echo '</nav>';
                        } else {
                            echo "Aucun produit trouvé.";
                        }
                    } catch (PDOException $e) {
                        echo "Erreur: " . $e->getMessage();
                    }

                    ?>
                </div>
            </section>

            <?php
            include("./carousel.php")
            ?>

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

            <?php
            include("./footer.php")
            ?>

        </main>

    </body>

    <script src=" script.js">
    </script>

    </html>

<?php } else {
    header("Location: login.php");
    exit;
} ?>
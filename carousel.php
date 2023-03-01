<?php

echo ('<section class="carrousel">
<div id="carouselExampleDark" class="carousel carousel-light slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="./img/womans/womans.jpg" class="d-block w-100" alt="femmes">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="font-family: Audiowide, sans-serif; color:#c79c2c">Femmes</h5>
                <a class="page-link" href="./top_woman.php">Cliquer ici pour voir nos produits</a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="./img/mens.png" class="d-block w-100" alt="hommes">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="font-family: Audiowide, sans-serif; color:#c79c2c">Hommes</h5>
                <a class="page-link" href="#">Cliquer ici pour voir nos produits</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/model.webp" class="d-block w-100" alt="accessoires">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="font-family: Audiowide, sans-serif; color:#c79c2c">Accessoires</h5>
                <a class="page-link" href="#">Cliquer ici pour voir nos produits</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</section>

?>');

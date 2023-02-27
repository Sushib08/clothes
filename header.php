<?php

echo (' <header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php"><img src="../img/clothes.png" class="logo" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="woman.php">Femmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hommes</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Vêtements
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
        </ul>
        <div class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item btn"> <a class="nav-link" href="account.php"><img src="../img/user.svg" alt="user" />Mon compte</a></li>
            <li class="nav-item btn"> <a class="nav-link" href="shop.php"><img src="../img/shop.svg" alt="shop" />Mon panier</a></li>
            <li class="nav-item btn"> <a class="nav-link" href="logout.php"><img src="../img/logout.svg" alt="logout" />Déconnexion</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>');

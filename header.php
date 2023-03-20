<header class="bg-light fixed-top ">
    <nav class="navbar navbar-expand-md navbar-light   ">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold text-dark" href="accueil.php">
                <span class="bg-dark bg-gradient p-1 rounded-3 text-light">AMA</span> NOZ
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-items" aria-controls="nav-items" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="nav-items">
                <ul class=" navbar-nav">
                    <li class="nav-item active"><a class="nav-link " href="tv.php">Télévison</a></li>
                    <li class="nav-item"><a class="nav-link " href="canape.php">Canapé</a></li>
                    <li class="nav-item"><a class="nav-link " href="lit.php">Lit</a></li>
                    <li class="nav-item"><a class="nav-link " href="#footer">Contact</a></li>

                    <li class="nav-item dropdown">

                        <a class="nav-link  " data-bs-toggle="dropdown" aria-expanded="false" href="#drop"><i class="bi bi-person"></i></a>
                        <ul class="dropdown-menu dropdown-menu-dark" id="drop">
                            <li><a class="dropdown-item" href="#"><?= $_SESSION['login']; ?></a></li>
                            <?php if ($_SESSION['role'] == 1) :; ?>
                                <li><a class="dropdown-item" href="addArticle.php">Ajouter des articles</a></li>

                            <?php endif; ?>
                            <li><a class="dropdown-item" href="moncompte.php">Votre compte</a></li>
                            <li><a class="dropdown-item" href="commandes.php">Vos commandes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="deconnexion.php">Deconnexion</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link " href="panier.php"><i class="bi bi-basket2"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

</header>



<header class="bg-light fixed-top ">
    <nav class="navbar navbar-expand-md navbar-light   ">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold text-dark" href="acceuil.php">
                <span class="bg-dark bg-gradient p-1 rounded-3 text-light">AMA</span> NOZ
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-items" aria-controls="nav-items" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="nav-items">
                <ul class=" navbar-nav">
                    <li class="nav-item active"><a class="nav-link " href="tv.php">Télévison</a></li>
                    <li class="nav-item"><a class="nav-link " href="fauteuil.php">Fauteuil</a></li>
                    <li class="nav-item"><a class="nav-link " href="aspirateur.php">Aspirateur</a></li>
                    <li class="nav-item"><a class="nav-link " data-bs-toggle="modal" href="#Contact">Contact</a></li>

                    <li class="nav-item dropdown">

                        <a class="nav-link  " data-bs-toggle="dropdown" aria-expanded="false" href="#drop"><i class="bi bi-person"></i></a>
                        <ul class="dropdown-menu dropdown-menu-dark" id="drop">
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

<div class="modal fade" id="Contact" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel">Qui sommes nous ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12 col-md-6 offset-md-1">
                    <form action="contact.php" method="Post">
                        <div class=" row mb-3">
                            <div class="col-6">
                                <label for="input1" class="form-label fs-5">Prénom</label>
                                <input type="text" id="input1" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="input2" class="form-label fs-5">Nom</label>
                                <input type="text" id="input2" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="input3" class="form-label fs-5">Adresse Email</label>
                                <input type="email" id="input3" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="input4" class="form-label fs-5">Message</label>
                                <textarea name="txtar" id="input4" class="form-control" cols="10" rows="7"></textarea>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" type="submit" class="btn btn-dark" data-bs-dismiss="modal">Envoyer</button>
            </div>
            </form>
        </div>
    </div>
</div>
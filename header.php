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
                    <li class="nav-item"><a class="nav-link " href="fauteuil.php">Fauteuil</a></li>
                    <li class="nav-item"><a class="nav-link " href="lit.php">Lit</a></li>
                    <li class="nav-item"><a class="nav-link " data-bs-toggle="modal" href="#Contact">Contact</a></li>

                    <li class="nav-item dropdown">

                        <a class="nav-link  " data-bs-toggle="dropdown" aria-expanded="false" href="#drop"><i class="bi bi-person"></i></a>
                        <ul class="dropdown-menu dropdown-menu-dark" id="drop">
                            <li><a class="dropdown-item" href="#"><?= $_SESSION['login']; ?></a></li>
                            <?php if($_SESSION['administrateur']==1):;?>
                            <li><a class="dropdown-item" data-bs-toggle="modal" href="#addArticle">Ajouter des articles</a></li>
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

<div class="modal fade" id="Contact" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel">Qui sommes nous ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12 ">
                    <form action="contact.php" method="Post">
                        <div class=" row mb-3">
                            <div class="col-12">
                                <label for="prenom" class="form-label fs-5">Prénom</label>
                                <input type="text" id="prenom" class="form-control" maxlength="30" required>
                            </div>
                            <div class="col-12">
                                <label for="input2" class="form-label fs-5">Nom</label>
                                <input type="text" id="input2" class="form-control" maxlength="30" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="email" class="form-label fs-5">Adresse Email</label>
                                <input type="email" id="email" class="form-control" maxlength="50" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="message" class="form-label fs-5">Message</label>
                                <textarea name="txtar" id="message" class="form-control" cols="10" rows="7" required maxlength="300"></textarea>
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

<div class="modal fade" id="addArticle" tabindex="-1" aria-labelledby="mlbl2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="mlbl2">Ajouter article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12 ">
                    <form action="addarticle.php" method="Post">
                        <div class=" row mb-3">
                            <div class="col-6">
                                <label for="addNom"class="form-label fs-5" require>Nom</label>
                                <input type="text" name="addNom" id="addNom" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="addPrix" class="form-label fs-5">Prix</label>
                                <input type="text" name="addPrix" id="addPrix" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <select name="catalogue" class="form-select" aria-label="Default select example" aria-placeholder="Catalogue">
                                    <option value="" disabled selected hidden>Catalogue</option>
                                    <option value="1">Télévision</option>
                                    <option value="2">Fauteuil</option>
                                    <option value="3">Lit</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="addimg" class="form-label fs-5">Image</label>
                                <input type="file" class="form-control" id="addimg" name="addimg" accept="image/png, image/jpeg">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="addDescription" class="form-label fs-5">Description</label>
                                <textarea name="addDescription" id="addDescription" class="form-control" cols="10" rows="7"></textarea>
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
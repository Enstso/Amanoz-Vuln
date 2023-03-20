<?php
require('sessionUser.php');
require('bddconnexion.php');

$id = $_SESSION['id'];
$req = $bdd->prepare("Select num_article, nom_article,  description_article, prix_article, image_article, id_panier,passer, num_utilisateur from Panier INNER JOIN Article ON Panier.num_article = Article.id_article INNER JOIN Utilisateur ON Panier.num_utilisateur = Utilisateur.id_utilisateur  where passer=1 and num_utilisateur='$id'");
$req->execute();
$articles = $req->fetchAll();
$rows = $req->rowCount();
?>
<!DOCTYPE html>
<html>
<?php include("head.php") ?>

<body>
    <?php
    include("header.php");
    ?>

    <main>
        <div class="container">
            <h1 class="text-dark mt-120">Vos Commandes</h1>
            <?php foreach ($articles as $article) : ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <?php
                                    echo '<img src="img/' . $article['image_article'] . '"class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">';
                                    ?>
                                </div>
                                <div class="ms-3">
                                    <h5><?= $article['nom_article'] ?></h5>
                                    <p class="small mb-0"><?= $article['description_article'] ?></p>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <div style="width: 80px;">
                                    <h5 class="mb-0"><?= $article['prix_article'] ?> €</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <?php include("footer2.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
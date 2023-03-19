<?php
require('sessionUser.php');

require('bddconnexion.php');

$req = $bdd->prepare('Select * from article where num_catalogue=1; ');
$req->execute();
$res = $req->fetchAll();
?>
<!DOCTYPE html>
<html>

<?php include("head.php") ?>

<body>
    <?php
    include("header.php");
    ?>
    <main class="mt-120 mb-75">
        <div class="container ">
            <h1 class="text-center fs-50 "> Nos Fauteuils</h1>
            <div class="row">
                <?php foreach ($res as $article) : ?>
                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <div class="card mx-auto" style="width: 18rem;">

                            <?php
                            echo '<img src="img/' . $article['image_article'] . '" class="card-img-top border" alt="article">';
                            ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= $article['nom_article'] . ' | ' . $article['prix_article'] . ' €' ?></h5>
                                <p class="card-text"><?= $article['description_article'] ?></p>
                                <?php
                                echo '<a href="panier.php?id=' . $article['id_article'] . '" class="btn btn-dark me-2">Au panier</a>';
                                if($_SESSION['role']==1) :;
                                echo '<a href="updateArticle.php?id=' . $article['id_article'] . '" class="btn btn-warning me-2"><i class="bi bi-arrow-clockwise "></i></a>';
                                echo '<a href="delete.php?id=' . $article['id_article'] . '" class="btn btn-danger"><i class="bi bi-trash"></i></a>';
                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </main>


    <?php include("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

   
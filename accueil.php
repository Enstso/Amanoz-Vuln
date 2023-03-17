<?php
require('sessionUser.php');

require('bddconnexion.php');
$j=0;
$articles =[];
for($i=1;$i<4;$i++){
$req = $bdd->prepare('select * from Article where num_catalogue="'.$i.'"');
$req->execute();
$res= $req->fetchAll();
$articles[$j]=$res;
$j++;
}


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
            <h1 class="text-center fs-50 "> Nos meilleurs articles</h1>
            <div id="carouselExample" class="carousel slide fixed " data-bs-ride="carousel">
                <div class="carousel-inner  ">
                    <?php foreach($article as $articles):;?>
                    <div class="carousel-item active text-center ">
                        
                            <?php
                            echo '<img src="img/'.$article['image_article'].'" class="img-fluid" alt="article">';
                            ?>
                       
                        <h5><?=$article['nom_article'];?></h5>
                    </div>
                    <?php endforeach;?>
                </div>

                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon text-secondary" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a href="#whoModal" data-bs-toggle="modal" class="text-decoration-none text-dark">
                <h3 class="text-center">Qui sommes nous ?</h3>
            </a>
            <!-- Modal -->
            <div class="modal fade" id="whoModal" tabindex="-1" aria-labelledby="modallbl" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modallbl">Qui sommes nous ?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <img src="img/rse.jpg" class="img-fluid" alt="rse">
                                </div>
                                <div class="col-6">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates voluptatum expedita explicabo corrupti. Voluptas fugiat aspernatur optio vero vitae accusantium exercitationem recusandae asperiores. Quod autem dignissimos ea nemo quaerat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
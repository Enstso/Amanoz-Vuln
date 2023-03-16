<!DOCTYPE html>
<html>

<?php include("head.php") ?>

<body>
    <?php
    include("header.php");
    ?>
    <main class="mt-120 mb-75">
        <div class="container ">
            <h1 class="text-center fs-50 "> Nos Télévisions</h1>
            <div class="card" style="width: 18rem;">
                <img src="img\tv1.jpg" class="card-img-top border" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-dark">Au panier</a>
                    <a href="#updateArticle" data-bs-toggle="modal" class="btn btn-warning"><i class="bi bi-arrow-clockwise"></i></a>
                    <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    
                </div>
            </div>
        </div>

    </main>


    <?php include("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

<div class="modal fade" id="updateArticle" tabindex="-1" aria-labelledby="mlupdate" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="mlupdate">Modifier article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12 ">
                    <form action="updatearticle.php" method="Post">
                        <div class=" row mb-3">
                            <div class="col-6">
                                <label for="updateNom"class="form-label fs-5">Nom</label>
                                <input type="text" id="updateNom" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="updatePrix" class="form-label fs-5">Prix</label>
                                <input type="text" id="updatePrix" class="form-control">
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
                                <label for="updateimg" class="form-label fs-5">Image</label>
                                <input type="file" class="form-control" id="updateimg" name="updateimg" accept="image/png, image/jpeg">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="updateDescription" class="form-label fs-5">Description</label>
                                <textarea name="updateDescription" id="updateDescription" class="form-control" cols="10" rows="7"></textarea>
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
</body>

</html>
<?php
require('sessionUser.php');

require('bddconnexion.php');
?>
<!DOCTYPE html>
<html>

<?php include("head.php") ?>

<body>
    <?php
    include("header.php");
    ?>

    <div class="mt-120">
        <div class="container">
            <h1 class="modal-title fs-5" id="mlbl2">Ajouter article</h1>


            <div class="col-12 ">
                <form action="addArticle.php" method="Post" enctype="multipart/form-data">
                    <div class=" row mb-3">
                        <div class="col-6">
                            <label for="addNom" class="form-label fs-5" require>Nom</label>
                            <input type="text" name="addNom" id="addNom" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="addPrix" class="form-label fs-5">Prix</label>
                            <input type="text" name="addPrix" id="addPrix" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="catalogue" class="form-label fs-5">Catalogue</label>
                            <select name="catalogue" id="catalogue" class="form-select" aria-label="Default select example" aria-placeholder="Catalogue">
                                <option value="" disabled selected hidden>Catalogue</option>
                                <option value="3">Télévision</option>
                                <option value="1">Canapé</option>
                                <option value="2">Lit</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="addimg" class="form-label fs-5">Image</label>
                            <input type="file" class="form-control" id="addimg" name="addimg">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="addDescription" class="form-label fs-5">Description</label>
                            <textarea name="addDescription" id="addDescription" class="form-control" cols="10" rows="7"></textarea>
                        </div>
                    </div>
            </div>
            <button type="submit" class="btn btn-dark" >Envoyer</button>
        </div>

            
        </form>
    </div>
    <?php
    include("footer2.php");
    ?>
    </body>

</html>
<?php
    if (isset($_FILES['addimg']) and $_FILES['addimg']['error'] == 0) {

        $nom = $_POST['addNom'];
        $prix = $_POST['addPrix'];
        $description = $_POST['addDescription'];
        (float)$prix = $_POST['addPrix'];
        $numCatalogue = intval($_POST['catalogue']);
        $image = $_FILES['addimg'];
        if ($image['size'] <= 1000000) {
            $fileInfo = pathinfo($image['name']);
            $extension = $fileInfo['extension'];
            $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
            if (in_array($extension, $allowedExtensions)) {
                move_uploaded_file($image['tmp_name'], 'img/' . basename($image['name']));
                $image = basename($image['name']);
                $req = $bdd->prepare("Insert Into Article (nom_article,description_article,prix_article,image_article,num_catalogue) Values('$nom','$description','$prix','$image','$numCatalogue') ");
                $req->execute();
                $res = $req->fetchAll();
               
            }
        }
    }
    ?>

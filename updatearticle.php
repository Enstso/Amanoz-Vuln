<?php
require('sessionUser.php');

require('bddconnexion.php');

if(!isset($_GET['id'])){
    header('Location:accueil.php');
}

?>
<!DOCTYPE html>
<html>

<?php include("head.php") ?>

<body>
    <?php
    include("header.php");
    ?>
    <div class="container">
        <div class="mt-120">
            <h1 class=" fs-5" id="mlupdate">Modifier article</h1>
            <form method="Post" action="updatearticle.php" enctype="multipart/form-data" >
                <div class=" row mb-3">
                
                        
                <?php echo   '<input type="hidden" id="id" name="id" class="form-control" value="'.$_GET['id'].'" >';?>
                    
                    <div class="col-6">
                        <label for="updateNom" class="form-label fs-5">Nom</label>
                        <input type="text" id="updateNom" name="updateNom" class="form-control" >
                    </div>
                    <div class="col-6">
                        <label for="updatePrix" class="form-label fs-5">Prix</label>
                        <input type="text" id="updatePrix" name="updatePrix" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="catalogue" class="form-label fs-5">Catalogue</label>
                        <select name="catalogue" id="catalogue" class="form-select" aria-label="Default select example" aria-placeholder="Catalogue">
                        <option value="" disabled selected hidden>Catalogue</option>
                                <option value="3">Télévision</option>
                                <option value="1">Fauteuil</option>
                                <option value="2">Lit</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="updateimg" class="form-label fs-5">Image</label>
                        <input type="file" class="form-control" id="updateimg" name="updateimg">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="updateDescription" class="form-label fs-5">Description</label>
                        <textarea name="updateDescription" id="updateDescription" class="form-control" cols="10" rows="7"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-dark">Envoyer</button>
            </form>
        </div>

    </div>

</body>

</html>
<?php

    

    if (!empty($_POST['updateNom']) and !empty($_FILES['updateimg']) and !empty($_POST['updatePrix']) and !empty($_POST['updateDescription'])) {
        $nom = $_POST['updateNom'];
        (float)$prix = $_POST['updatePrix'];
        $image = $_FILES['updateimg'];
        $description = $_POST['updateDescription'];
        (int)$catalogue = intval( $_POST['catalogue']);
        if (isset($image) and $image['error'] == 0) {
            $nom = $_POST['updateNom'];
            (float)$prix = $_POST['updatePrix'];
            $description = $_POST['updateDescription'];
            if ($image['size'] <= 1000000) {
                $fileInfo = pathinfo($image['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions)) {
                    move_uploaded_file($image['tmp_name'], 'img/' . basename($image['name']));
                    $image = basename($image['name']);
                    $id = $_POST['id'];
                    $req = $bdd->prepare("Update article set nom_article='$nom', description_article='$description', prix_article='$prix', image_article='$image',num_catalogue='$catalogue 'where id_article='$id'");
                    
                    $req->execute();
                    $row = $req->rowCount();
                   
                    
                }
            }
        }
    }

    
    
    

?>
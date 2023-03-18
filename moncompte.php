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

    <main>
        <div class="container">
            <div class="mt-120 mb-75">
                <h1>Votre compte</h1>
                <h4>Vous pouvez changer vos identifiants</h4>
                <form action="moncompte.php" method="Post">
                    <div class=" row mb-3">
                        <div class="col-6">
                            <label for="user" class="form-label fs-5">Username</label>
                            <input type="text" id="user" name="user" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="password" class="form-label fs-5">Password</label>
                            <input type="text" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="email" class="form-label fs-5">Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <button type="button" type="submit" class="btn btn-dark text-center">Changer</button>
            </div>


            </form>
        </div>
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
<?php


if (!empty($_POST['user']) and !empty($_POST['password']) and $_POST['email']) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $id = $_SESSION['id'];
    $req = $bdd->prepare("Update Utilisateur set username='$user',password='$password',email='$email' where id_utilisateur=$id  ");
    $req->execute();
    $res = $req->rowCount();
    if ($res > 0) {
        header('Location:index.php');
    }
}
?>
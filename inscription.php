<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <main class=" position-absolute top-50 start-50 translate-middle">
            <h1 class="h3 mb-3 font-weight-normal  text-white text-center"> <span class=" bg-dark bg-gradient p-1 m-0 rounded-3">AMA</span> <span class=" m-0 text-dark p-1 fs-2">NOZ</span> </h1>
            <form method="Post" action="inscription.php" class="form-signin">
                <main>
                    <div class="form-group row mb-4">
                        <label for="username" class="col-12">Username</label>
                        <div class="col-12">
                            <input type="username" class="form-control" id="username" name="username" minlength="2" maxlength="20" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="email" class="col-12">Email</label>
                        <div class="col-12">
                            <input type="email" name="email" class="form-control" id="email" minlength="2" maxlength="20" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="password" class="col-12">Mot de passe</label>
                        <div class="col-12">
                            <input type="password" class="form-control" id="password" name="password" minlength="2" maxlength="20" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="repassword" class="col-12">Confirmez votre mot de passe</label>
                        <div class="col-12">
                            <input type="password" class="form-control" id="repassword" name="repassword" minlength="2" maxlength="20" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 p-2">Valider</button>
                </main>
            </form>
            <a href="index.php" class="text-dark text-decoration-none">Vous connecter ?</a>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php


    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        include('bddconnexion.php');
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        if ($password == $repassword) {

            $req = $bdd->prepare("Insert into Utilisateur (username,password,email,administrator) values('$username','$password','$email',0)");
            $req->execute();
            header('Location: index.php');
        } else {
            header('Location: inscription.php');
           die();
        }
    }

    ?>
</body>

</html>
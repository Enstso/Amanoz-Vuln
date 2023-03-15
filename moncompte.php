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
                <form action="contact.php" method="Post">
                    <div class=" row mb-3">
                        <div class="col-6">
                            <label for="input1" class="form-label fs-5">Username</label>
                            <input type="text" id="input1" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="input2" class="form-label fs-5">Password</label>
                            <input type="text" id="input2" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="input3" class="form-label fs-5">Email</label>
                            <input type="email" id="input3" class="form-control">
                        </div>
                    </div>
                    <button type="button" type="submit" class="btn btn-dark text-center">Changer</button>
            </div>

            
            </form>
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
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
            <div class="card" style="width: 18rem;">
                <img src="img\tv1.jpg" class="card-img-top border" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-dark">Au panier</a>
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
</body>

</html>
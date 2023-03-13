<!DOCTYPE html>
<html>


<?php include("head.php")?>
<body>
    <?php
    include("header.php");
    ?>

    <main class="mt-120 mb-75">
        <div class="container ">
            <h1 class="text-center fs-50 "> Nos derniers articles</h1>
            <div id="carouselExample" class="carousel slide fixed" data-bs-ride="carousel">
                <div class="carousel-inner  ">
                    <div class="carousel-item active text-center ">
                        <a href="aspirateur.php">
                            <img src="img\aspi1.jpg" class="img-fluid" alt="...">
                        </a>
                    </div>
                    <div class="carousel-item text-center ">
                        <a href="fauteuil.php">
                            <img src="img\canap1.jpg" class="img-fluid" alt="...">
                        </a>
                    </div>
                    <div class="carousel-item text-center ">
                        <a href="tv.php">
                            <img src="img\tv1.jpg" class="img-fluid" alt="...">
                        </a>
                    </div>
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
        </div>
       
    </main>
    <?php include("footer.php")?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
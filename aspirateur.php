<!DOCTYPE html>
<html>

<?php include("head.php")?>

<body>
    <?php 
    include("header.php");
    ?>
  <main class="mt-120 mb-75">
        <div class="container ">
            <h1 class="text-center fs-50 "> Nos Aspirateurs</h1>
           
        </div>
       
    </main>

<?php include("footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
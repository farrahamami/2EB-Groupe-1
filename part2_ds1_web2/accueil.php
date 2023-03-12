<?php session_start(); 
 require("connect.php");
 require "manager.class.php";
 $M = new manager_membre();
 echo $M->header();
 $M->create();
 
 ?>

<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bondi</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/all.min.css" />
        <link rel="stylesheet" href="css/#########.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet" />
      </head>
      <body>
 
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/s1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/s2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/s3.jpg." class="d-block w-100" alt="...">
    </div>
  </div>
  <div>
  <img src="..." class="img-thumbnail" alt="...">
<div>
  <h3></h3>
  <h5>Fabrication et vente de Bougies , bath bombs et des sels de bain parfumés fait à la main avec beau
  situz a ENNASR  
</5>
20 656 651
</div>

  </div>
</div>
</body>
<footer>
<?php  
$M = new manager_membre();
 echo $M->footer();
?>
  <!-- jquery -->
  <script src = "query-3.6.0.js"></script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
  <!-- bootstrap js -->
  <script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <!-- custom js -->
  <script src = "script.js"></script>
</footer>
</html>
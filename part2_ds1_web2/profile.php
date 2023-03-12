<?php
require "manager.class.php";
session_start();  
$host = "localhost";  
$username = "root";  
$password = "";  
$database = "site";  
$message = "";
$connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM membre';
$statement = $connect->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
$M = new manager_membre();
 echo $M->header();
 ?>


  
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
   <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">voulez vous</h5>
        <p class="card-text">gere les compte des membre.</p>
        <a href="gestion_membre.php" class="btn btn-primary">acce campte membre</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">voulez vous</h5>
        <p class="card-text">ajouter des nousvous produit a votre boutique.</p>
        <a href="ajouter_produit.php" class="btn btn-primary">ajouter produit</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>































<footer>
<?php  
$M = new manager_membre();
 echo $M->footer();
?>
</footer>
</html>

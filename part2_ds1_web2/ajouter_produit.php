<?php  
session_start(); 
 require("connect.php");
 require "manager.produit.class.php";
 $p= new manager();
 $p->create_produit();
 $dsn="mysql:dbname=".BASE.";host=".SERVER;
 try{$connexion=new PDO($dsn,USER,PASSWD);}
 
 catch(PDOException $e){
 printf("Échec de la connexion : %s\n", $e->getMessage());
 exit();
 } 
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "site";  
 $message = "";  
 require "manager.class.php";
 $l= new manager_membre();
 echo $l->headeradmin();
 ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />    
</head>
<body>

<div class="container col-sm-6 ">
  <div class=" mt-5">
    <div class="card-header">
      <h3>Créer un produit</h3>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?php echo $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="referance">referance</label>
          <input type="text" name="referance" id="referance" class="form-control">
        </div>
        <div class="form-group">
          <label for="categorie">categorie</label>
          <input type="text" name="categorie" id="categorie" class="form-control">
        </div>
        <div class="form-group">
          <label for="titre">titre</label>
          <input type="text" name="titre" id="titre" class="form-control">
        </div>
        <div class="form-group">
          <label for="description">description</label>
          <input type="text" name="descriptionn" id="descriptionn" class="form-control">
        </div>
        <div class="form-group">
          <label for="photo">photo</label>
          <input type="file" name="photo" id="photo" class="form-control">
        </div>
        <div class="form-group">
          <label for="prix">prix</label>
          <input type="number" name="prix" id="prix" class="form-control">
        </div>
        <div class="form-group">
          <label for="stock">stock</label>
          <input type="number" name="stock" id="stock" class="form-control">
        </div>
     
        <div class="form-group">
          <button type="submit" class="btn btn-info" onclick="clkhere1()">ajouter un produit</button>
        </div>
      </form> 
    </div>
  </div>
</div>
   
</div>
</body>
<script  type="text/javascript">
  function clkhere1()
 {
     let referance=document.getElementById("referance").value;
     let categorie=document.getElementById("categorie").value;
     let titre=document.getElementById("titre").value;
     let descriptionn=document.getElementById("descriptionn").value;
     let photo=document.getElementById("photo").value;
     let prix=document.getElementById("prix").value;
     let stock=document.getElementById("stock").value;
    

     if(!referance || !categorie ){alert('Il y a quelque champ est vide , remplir tout les données')}}
     else{alert('data insered ')}
    
     </div>
</body>
<footer>
<?php  
require "manager.class.php";
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
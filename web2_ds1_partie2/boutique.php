<?php
require 'connect2.php';
$DB=new DB();
require "manager.class.php";
$o = new manager_membre();
echo $o->header();
require ("ajouter_panier.php");
$pp=new ajouter_panier();
echo $pp-> create_panier();
?>

<html lang="en">
<head>
 
    <title>boutique</title>   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
</head>

<body>
<main id="main" role="main">
    <section class="jumbotron text-center" id="mainBanner">
        <div class="container">
            <h1 class="jumbotron-heading">lighting up your world a candle at a time</h1>
            <p class="lead text-muted"></p>
            <p>
                <a href="#" class="btn btn-primary my-2"></a>
                
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="collection-heading">
                    <span>My Collection</span>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php $products=$DB->query('SELECT * FROM produit');?>
                <?php foreach ($products as $produit) : ?>
                <div class="col">
                    <div class="card h-100">
                    <img src="img/<?php echo $produit->photo;?>"  class="card-img-top" id="photo">
                       <div class="card-body">
                            <h5 class="card-title" id="titre1"><?=$produit->titre?></h5>
                            <p class="card-text" id="descriptionn1"><?=$produit->descriptionn ;?></p>
                            <form method="post" action="">

                    <input id="titre1" type="hidden" name="titre" value="<?=$produit->titre;?>" >
                    <input  id="descriptionn1" type="hidden" name="descriptionn" value="<?=$produit->descriptionn;?>">
                    <input id="photo1" type="hidden" name="photo" value="<?=$produit->photo ;?>">
                    <input id="prix1" type="hidden" name="prix" value="<?=$produit->prix;?>">
                    <input type="number" name="quantite" value="1" class="form-control">
                 <small class="text-muted"><?=number_format($produit->prix,2);?>DTN</small>
                 <br>
                  <button type="btn" class="btn btn-info" onclick="clkhere5()">ajouter panier </button> 
                  <a href="panier.php"><button type="button" class="btn btn-info">voir panier</button></a>
                </form>
            </div>
        </div>
    </div>

<?php endforeach ;?>
</main>
</body>
<footer>
<script  type="text/javascript">
  function clkhere5()
 {

     let titre=document.getElementById("titre").value;
     let descriptionn=document.getElementById("descriptionn").value;
     let photo=document.getElementById("photo").value;
     let prix=document.getElementById("prix").value;
    

    

     if(!titre || !descriptionn ||!photo || !prix ){alert('impsible ')}
     else{alert('data insered ')}
    }
     </div>
<?php
 echo $o->footer();
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
</footer>
</html>






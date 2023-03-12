<?php
require 'connect2.php';
$DB=new DB();
require "manager.class.php";
$o = new manager_membre();
echo $o->header();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <title>boutique</title>
</head>
<body>

<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
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
                    <img src="img/<?php echo $produit->photo;?>"  class="card-img-top" alt="...">
                       <div class="card-body">
                            <h5 class="card-title"><?=$produit->titre?></h5>
                            <p class="card-text"><?=$produit->descriptionn ;?></p>
                            <form method="post" action="">

                    <input type="hidden" name="titre" value="<?=$produit->titre;?>">
                    <input type="hidden" name="photo" value="<?=$produit->photo ;?>">
                    <input type="hidden" name="prix" value="<?=$produit->prix;?>">
                    <input type="number" name="quantite" value="1" class="form-control">
                    <div class="d-flex justify-content-between align-items-center">
                 <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary" ></span>
                

                 <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="panier.php">acheter</button>
                                  
                                    </div>
                        <small class="text-muted"><?=number_format($produit->prix,2);?>DTN</small>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach ;?>
</main>
</body>
<footer>

<?php
 echo $o->footer();
 ?>
</footer>
</html>







<?php

require "manager.produit.class.php";
$M = new manager_membre();
echo $M->header();
$M = new manager();
$M->create_produit();
require("create_produit.php");
$M->create_produit();
$message->$M;
?>
<div class="container">
<div class="card mt-5">
  <div class="card-header">
    <h2>Créer un nouveau produit </h2>
  </div>
  <div class="card-body">
    <?php if(!empty($message)): ?>
      <div class="alert alert-success">
        <?= $message; ?>
      </div>
    <?php endif; ?>
    <form method="post">
      <div class="form-group">
      <label for="name">ajouter</label>
        </div>
        <label for="referance">referance</label><br>
    <input type="text" id="referance" name="referance" maxlength="20" placeholder=" la referance "><br><br>
          
    <label for="categorie">categorie</label><br>
    <input type="text" id="categorie" name="categorie" required="required"><br><br>
    
    <label for="titre">titre</label><br>
    <input type="text" id="titre" name="titre" maxlength="20" placeholder=" le titre "><br><br>
    
    <label for="descriptionn">description</label><br>
    <input type="text" id="descriptionn" name="descriptionn" maxlength="20" placeholder=" la description "><br><br>
    
    <label for="photo">photo</label><br>
    <input type="file" id="photo" name="photo" maxlength="20" placeholder=" la photo "><br><br>

    <label for="prix">prix</label><br>
    <input type="number" id="prix" name="prix" maxlength="20" placeholder=" le prix "><br><br>

    <label for="stock">stock</label><br>
    <input type="number" id="stock" name="stock" maxlength="20" placeholder=" le stock "><br><br>

    </div>
        <button type="submit" class="btn btn-info">Créer un produit </button>
      </div>
    </form>
  </div>
</div>
</div>
<?php  
$M = new manager_membre();
 echo $M->footer();
?>
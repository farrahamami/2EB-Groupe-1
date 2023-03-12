<?php  
 session_start(); 
 require("connect2.php");
 require "manager.class.php";
$M = new manager_membre();
$M->create();
 $dsn="mysql:dbname=".BASE.";host=".SERVER;
 try{
 $connexion=new PDO($dsn,USER,PASSWD);
 }
 catch(PDOException $e){
 printf("Échec de la connexion : %s\n", $e->getMessage());
 exit();
 }
 echo $M->header()
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>***********</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">   
</head>
<style>
    body{
        background-image: color #444;
    }
    .he{
      background-color:#7777 ;
    }
    h1{
      font-size:50px;S
    }
    h3{
      color:#000;
      font-size:35px;
      text-align:center;
    }
    label{
      color:#fff;
      font-size:18px;
    }
    span{
      text-align:center;
      color:#FC0FE6;
    }
    .spa{
      color:#3A094B;
    }
</style>
<body>

<div class="container">
  <p>WELCOM TO  <h1><span>L</span>IGHT<span class="spa"></span> </span><span>UP</span></h1> </p> 
</div>
<br>
<br>
<br>
<div class="container col-sm-6 ">
  <div class=" mt-12">
    <div class="card-header">
      <h2>cree un campte</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?php echo $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
         
        </div>
        <labe2 for="pseudo">Pseudo</labe2><br>
    <input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo" pattern="[a-zA-Z0-9-_.]{1,20}" title="caractères acceptés : a-zA-Z0-9-_." required="required"><br><br>
          
    <labe2 for="mdp">Mot de passe</labe2><br>
    <input type="password" id="mdp" name="mdp" required="required"><br><br>
          
    <labe2 for="nom">Nom</labe2><br>
    <input type="text" id="nom" name="nom" placeholder="votre nom"><br><br>
          
    <labe2 for="prenom">Prénom</labe2><br>
    <input type="text" id="prenom" name="prenom" placeholder="votre prénom"><br><br>
  
    <labe2 for="email">Email</labe2><br>
    <input type="email" id="email" name="email" placeholder="exemple@gmail.com"><br><br>
          
    <labe2 for="civilite">Civilité</labe2><br>
    <input name="civilite" value="m" checked="" type="radio">Homme
    <input name="civilite" value="f" type="radio">Femme<br><br>
                  
    <labe2 for="ville">Ville</labe2><br>
    <input type="text" id="ville" name="ville" placeholder="votre ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."><br><br>
          
    <labe2 for="cp">Code Postal</labe2><br>
    <input type="text" id="code_postal" name="code_postal" placeholder="code postal" pattern="[0-9]{5}" title="5 chiffres requis : 0-9"><br><br>
          
    <labe2 for="adresse">Adresse</labe2><br>
    <textarea id="adresse" name="adresse" placeholder="votre dresse" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés :  a-zA-Z0-9-_."></textarea><br><br>
      </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info" onclick="clkhere2()">Create a person</button>
        </div>
  <a href="singup.php"> avez vous un compte </a>      
</form>
    </div>
  </div>
</div>
     
  </div>
</div>
<script  type="text/javascript">
  function clkhere1()
 {
     let name=document.getElementById("pseudo").value;
     let pass=document.getElementById("pass").value;

     if(!name || !pass){alert('Il y a quelque champ est vide , remplir tout les données')}
     if(pass<8){alert('Le mot de passe doit etre au moin 8 caractère ')}
    
 }
</script>
</body>
<?php  
$M = new manager_membre();
 echo $M->footer();
?>
</html>
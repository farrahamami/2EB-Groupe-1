<?php  
 session_start(); 
 require("connect.php");
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
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "site";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["pseudo"]) || empty($_POST["pwd"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM member WHERE Pseudo = :pseudo AND Passw= :pwd";  
                $statement = $connect->prepare($query);  
                $sql= "SELECT * FROM member WHERE Pseudo =". $_POST["pseudo"];
                 $c=$connexion->query($sql);
                $statement->execute(  
                     array(  
                          'pseudo'     =>      $_POST["pseudo"],  
                          'pwd'     =>         $_POST["pwd"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                { 
                     if($_POST["pseudo"]=="Admin"){
                         header("location:CRUD/CRUD_Manager.php");
                     }
                     else{ 
                     $_SESSION["pseudo"] = $_POST["pseudo"];
                     header("location:profile.php"); } 
                }  
                else  
                {  
                     $message = 'Wrong Data';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
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
<div class="container col-sm-6 ">
  <div class=" mt-5">
    <div class="card-header">
      <h3>cree un campte</h3>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?php echo $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Pseudo </label>
        </div>
        <label for="pseudo">Pseudo</label><br>
    <input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo" pattern="[a-zA-Z0-9-_.]{1,20}" title="caractères acceptés : a-zA-Z0-9-_." required="required"><br><br>
          
    <label for="mdp">Mot de passe</label><br>
    <input type="password" id="mdp" name="mdp" required="required"><br><br>
          
    <label for="nom">Nom</label><br>
    <input type="text" id="nom" name="nom" placeholder="votre nom"><br><br>
          
    <label for="prenom">Prénom</label><br>
    <input type="text" id="prenom" name="prenom" placeholder="votre prénom"><br><br>
  
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" placeholder="exemple@gmail.com"><br><br>
          
    <label for="civilite">Civilité</label><br>
    <input name="civilite" value="m" checked="" type="radio">Homme
    <input name="civilite" value="f" type="radio">Femme<br><br>
                  
    <label for="ville">Ville</label><br>
    <input type="text" id="ville" name="ville" placeholder="votre ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."><br><br>
          
    <label for="cp">Code Postal</label><br>
    <input type="text" id="code_postal" name="code_postal" placeholder="code postal" pattern="[0-9]{5}" title="5 chiffres requis : 0-9"><br><br>
          
    <label for="adresse">Adresse</label><br>
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
<?php  
session_start(); 
require("connect.php");
require "manager.class.php";
$M = new manager_membre();
echo $M->header();
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
           if(empty($_POST["pseudo"]) || empty($_POST["mdp"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM membre WHERE pseudo = :pseudo AND mdp= :mdp";  
                $statement = $connect->prepare($query);  
                $sql= "SELECT * FROM membre WHERE pseudo =". $_POST["pseudo"];
                 $c=$connexion->query($sql);
                $statement->execute(  
                     array(  
                          'pseudo'     =>      $_POST["pseudo"],  
                          'mdp'     =>         $_POST["mdp"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                { 
                     if($_POST["pseudo"]=="Admin"){
                         header("location:profile_admin.php");
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
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>hello</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">   
</head>
<style>
    body{
        background-image: color ;
    }
    .he{
      background-color ;
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
  <p><h1><span>L</span>IGHT<span class="spa"></span> </span><span>UP</span></h1> </p> 
</div>
<div class="container col-sm-6 ">
  <div class=" mt-5">
    <div class="card-header"
   > </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?php echo $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
      <div class="container col-sm-6 mt-5" >
    <div class="card-header">
      <h3 >Login </h3> <span>start NOW !</span> <br /> 
    </div> 
      <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>   
                  <form method="post" >  
                      <label>Pseudo</label>  
                      <input type="text" name="pseudo" class="form-control" />  
                      <br />  
                      <label>mdp</label>  
                      <input type="mdp" name="mdp" class="form-control" />  
                      <br />  
                      <input type="submit" name="login" class="btn btn-info" value="Login" onclick="clkhere1()" />  
                  </form>  

    </div>
</div>
  </div>
</div>
     
  </div>
</div>
<script  type="text/javascript">
  function clkhere1()
 {
     let nom=document.getElementById("pseudo").value;
     let mdp=document.getElementById("mdp").value;

     if(!nom || !mdp){alert('Il y a quelque champ est vide , remplir tout les données')}
     if(mdp<8){alert('Le mot de passe doit etre au moin 8 caractère ')}
    
 }
</script>
</body>
<footer>
<?php  
$M = new manager_membre();
 echo $M->footer();
?>
</html>
    
    
    
    
    
















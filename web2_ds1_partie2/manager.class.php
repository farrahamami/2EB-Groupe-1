<?php

class manager_membre{
    
function create()
{
    
  $host = "localhost";  
  $username = "root";  
  $password = "";  
  $database = "site";  
  $message = "";
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if (isset ($_POST["pseudo"])  && isset($_POST["mdp"]) && isset($_POST["nom"]) && isset($_POST["prenom"])  && isset($_POST["civilite"]) && isset($_POST["ville"])  && isset($_POST["code_postal"])&& isset($_POST["adresse"])) {
     $pseudo  = $_POST['pseudo'];
     $mdp = $_POST['mdp'];
     $nom  = $_POST['nom'];
     $prenom  = $_POST['prenom'];
     $email=$_POST['email'];
     $civilite = $_POST['civilite'] ;
     $ville  = $_POST['ville'];
     $code_postal  = $_POST['code_postal'];
     $adresse  = $_POST['adresse'];
     $sql = 'INSERT INTO membre(id_membre,pseudo,mdp,nom,prenom,email,civilite,ville,code_postal,adresse) VALUES(null,:pseudo,:mdp,:nom,:prenom,:email,:civilite,:ville,:code_postal,:adresse)';
     $statement = $connect->prepare($sql);
    if ($statement->execute([':pseudo'=>$pseudo ,':mdp'=> $mdp ,':nom'=> $nom ,':prenom'=>$prenom ,':email'=>$email , ':civilite'=>$civilite , ':ville'=>$ville , ':code_postal'=>$code_postal , ':adresse'=>$adresse ])) {
      $message = 'data inserted successfully';
    }
  } 
  return $message;
} 

    public function delete() 
    {
      session_start();  
      $host = "localhost";  
      $username = "root";  
      $password = "";  
      $database = "site";  
      $message = "";
        $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $id_membre = $_GET['id_membre'];
        $sql = 'DELETE FROM membre WHERE id_membre=:id_membre';
        $statement = $connect->prepare($sql);
        if ($statement->execute([':id_membre' => $id_membre])) 
        {
        header("Location:CRUD_Manager.php");
        }
      }
   
    public function update(membre $p)
    {
      $host = "localhost";  
      $username = "root";  
      $password = "";  
      $database = "site";  
      $message = "";
        $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $connect->prepare('UPDATE membre SET id_membre  = ? WHERE Pseudo = ?');
        $stmt->execute([$p->getid_membre(),$p->getPseudo()]);
    } 

    /**
     * Summary of edit
     * @return mixed
     */
    public function edit()
    {
      session_start();  
      $host = "localhost";  
      $username = "root";  
      $password = "";  
      $database = "site";  
      $message = "";
        $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $id_membre = $_GET['id_membre'];
        $sql = 'SELECT * FROM membre WHERE id_membre=:id_membre';
        $statement = $connect->prepare($sql);
        $statement->execute([':id_membre' => $id_membre ]);
        $person = $statement->fetch(PDO::FETCH_OBJ);
        if (isset ($_POST['nom'])  && isset($_POST['email']) ) 
        {
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $sql = 'UPDATE membre SET Pseudo=:nom, Email=:email WHERE Id_membre=:id_membre';
            $statement = $connect->prepare($sql);
            if ($statement->execute([':nom' => $nom, ':email' => $email, ':id_membre' => $id_membre])) {
                header("CRUD_Manager.php");
            }
        }
        return $person;
    }
        
  
    public function get ($name){
      $host = "localhost";  
      $username = "root";  
      $password = "";  
      $database = "site";  
      $message = "";
        $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt =$connect->prepare('SELECT id_membre, Pseudo,  FROM membre WHERE Pseudo = ?');
      $stmt->execute([$name]);
      while ($row = $stmt->fetch()) {
       return new membre($row['id_membre'],$row['pseudo'],$row['mpd'] , $row['nom'] ,$row['prenom'] ,$row['email'],$row['civilite'],$row['ville'] ,);
      }
      }   
        

    /**
     */
    public function __construct() {
    }
    public function header_membre()
    {return '<!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Bondi</title>
          <link rel="stylesheet" href="css/bootstrap.min.css" />
          <link rel="stylesheet" href="css/all.min.css" />
          <link rel="stylesheet" href="css/style.css" />
          <link rel="preconnect" href="https://fonts.googleapis.com" />
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
          <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet" />
        </head>
        <body>
          <header>
          <nav class = "navbar navbar-expand-lg navbar-light bg-white py-1fixed-top">
            <div class = "container">
                <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "panier/panier.php">
                    <img src = "img/logo.jpg" alt = "site icon"  width="130" height="140">
                     
                </a>
      
                <div class = "order-lg-5 nav-btns">
                <a href="panier.php"><i class="fa fa-shopping-cart"></i></a>
                        <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary" ></span>
                      
                </div>
        <input class="form-control" type="search" placeholder="rechercher" name="search">
                  <button class="btn btn-outline-success" type="submit">search</button>
  
                <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                    <span class = "navbar-toggler-icon"></span>
                </button>
      
                <div class = "collapse navbar-collapse order-lg-0" id = "navMenu">
                    <ul class = "navbar-nav mx-auto text-center">
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "accueil.php">acceuil</a>
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "boutique.php">boutique</a>
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "inscription.php">inscription</a>
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "deconnexion.php">deconnexion</a>
                        </li>         
                    </ul>
                </div>
            </div>
        </nav>
          <header>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/all.min.js"></script>
        ';
    }
    public function header()
    {return '<!DOCTYPE html>
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
          <header>
          <nav class = "navbar navbar-expand-lg navbar-light bg-white py-0 fixed-top">
            <div class = "container">
                <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "shopping.html">
                    <img src = "img/logo.jpg" alt = "site icon"  width="130" height="140">
                     
                </a>
      
                <div class = "order-lg-0 nav-btns">
               
                <a href="panier.php"><i class="fa fa-shopping-cart"></i></a>
                        <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary" ></span>
                      
                </div>
        <input class="form-control" type="search" placeholder="rechercher" name="search">
                  <button class="btn btn-outline-success" type="submit">search</button>
  
                <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                    <span class = "navbar-toggler-icon"></span>
                </button>
      
                <div class = "collapse navbar-collapse order-lg-0" id = "navMenu">
                    <ul class = "navbar-nav mx-auto text-center">
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "accueil.php">acceuil</a>
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "boutique.php">boutique</a>
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "inscription.php">inscription</a>
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "connexion.php">connexion</a>
                        </li>         
                    </ul>
                </div>
            </div>
        </nav>
          <header>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/all.min.js"></script>
        </body>
      </html>';
    }
  
  /**
   * Summary of headeradmin
   * @return string
   */
  public function headeradmin()
  {return '
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bondi</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/all.min.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet" />
      </head>
      <body>
        <nav class = "navbar navbar-expand-lg navbar-light bg-white py-0 fixed-top">
          <div class = "container">
               <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "shopping.html">
                    <img src = "img/logo.jpg" alt = "site icon"  width="130" height="140">
                     
                </a>
                <a href="panier.php"><i class="fa fa-shopping-cart"></i></a>
              <div class = "order-lg-0 nav-btns" >
                    <a href="panier.php" <button type = "button" class = "btn position-relative" >
                      <i class = "fa fa-shopping-cart"></i>
                      <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary" ></span>
                       </button>
                  </a>
                
              </div>
    
              <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                  <span class = "navbar-toggler-icon"></span>
              </button>
    
              <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                  <ul class = "navbar-nav mx-auto text-center">
                      <li class = "nav-item px-2 py-2">
                          <a class = "nav-link text-uppercase text-dark" href = "accueil.php">acceuil</a>
                      </li>
                      <li class = "nav-item px-2 py-2">
                          <a class = "nav-link text-uppercase text-dark" href = "boutique.php">boutique</a>
                      </li>
                      <li class = "nav-item px-2 py-2">
                          <a class = "nav-link text-uppercase text-dark" href = "gestion_membre.php">gestion membre</a>
                      </li>
                      <li class = "nav-item px-2 py-2">
                          <a class = "nav-link text-uppercase text-dark" href = "ajouter_produit.php">gestion boutique</a>
                      </li>         
                      <li class = "nav-item px-2 py-2">
                          <a class = "nav-link text-uppercase text-dark" href = "deconnexion.php">deconnexion</a>
                      </li> 
                  </ul>
              </div>
          </div>
      </nav>
    
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
      </body>
    </html>
    ';}
    
  /**
   * Summary of footer
   * @return string
   */
  function footer (){
    return'<!-- footer -->
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-shopping</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "style.css">
  </head>
    <footer class = "bg-dark py-5">
     <div class = "container">
         <div class = "row text-white g-4">
             <div class = "col-md-6 col-lg-3">
          
                 <p class = "text-white text-muted mt-3">ecommrce . ecomerce,ecomerce, ?</p>
             </div>
  
             <div class = "col-md-6 col-lg-4">
                 <h5 class = "fw-light">Links</h5>
                 <ul class = "list-unstyled">
                     <li class = "my-3">
                         <a href = "acceuil.php" class = "text-white text-decoration-none text-muted">
                             <i class = "fas fa-chevron-right me-1"></i> accueil
                         </a>
                     </li>
                     <li class = "my-3">
                         <a href = "connexion.php" class = "text-white text-decoration-none text-muted">
                             <i class = "fas fa-chevron-right me-1"></i> connexion
                         </a>
                     </li>
                     <li class = "my-3">
                         <a href = "inscription.php" class = "text-white text-decoration-none text-muted">
                             <i class = "fas fa-chevron-right me-1"></i> inscription
                         </a>
                     </li>
                     
                 </ul>
             </div>
  
             <div class = "col-md-6 col-lg-3">
                 <h5 class = "fw-light mb-3">Contact Us</h5>
                 <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                     <span class = "me-3">
                         <i class = "fas fa-map-marked-alt"></i>
                     </span>
                     <span class = "fw-light">
                     ENNASR / EL MORNAGUIA / SOUKRA / LAAOUINA     </span>
                 </div>
                 <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                     <span class = "me-3">
                         <i class = "fas fa-envelope"></i>
                     </span>
                     <span class = "fw-light">
                        lightup@gmail.com
                     </span>
                 </div>
                 <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                     <span class = "me-3">
                         <i class = "fas fa-phone-alt"></i>
                     </span>
                     <span class = "fw-light">
                     20 656 651
                     </span>
                 </div>
             </div>
  
             <div class = "col-md-6 col-lg-5">
                 <h5 class = "fw-light mb-3">Follow Us</h5>
                 <div>
                     <ul class = "list-unstyled d-flex">
                         <li>
                             <a href = "https://www.facebook.com/lightup.tn2021" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                 <i class = "fab fa-facebook-f"></i>
                             </a>
                         </li>
                      
                         <li>
                             <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                 <i class = "fab fa-instagram"></i>
                             </a>
                         </li>
                         
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
  </footer>
  ';
  }
}
?>
<?php
class ajouter_panier{

  function create_panier()
  {
      
    $host = "localhost";  
    $username = "root";  
    $password = "";  
    $database = "site";  
    $message = "";
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset ($_POST['titre'])  && isset($_POST['descriptionn']) && isset($_POST['photo']) && isset($_POST['prix'])  ) {
      $titre = $_POST['titre'];
      $descriptionn = $_POST['descriptionn'];
      $photo = $_POST['photo'];
      $prix = $_POST['prix'];
       $sql = 'INSERT INTO panier(titre, descriptionn, photo,prix) VALUES(:titre, :descriptionn, :photo, :prix )';
      $statement = $connect->prepare($sql);
      if ($statement->execute([':titre' => $titre, ':descriptionn' => $descriptionn , ':photo'=> $photo, ':prix'=> $prix, ])) {
        $message = 'data inserted successfully';
      }
    } 
    return $message;
  } 

      public function get ($titre){
        $host = "localhost";  
        $username = "root";  
        $password = "";  
        $database = "site";  
        $message = "";
          $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
          $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt =$connect->prepare('SELECT  titre, descriptionn, photo , prix,quantite FROM panier WHEREtitre = ?');
        $stmt->execute([$titre]);
        while ($row = $stmt->fetch()) {
         return new panier( $row['titre'],$row['descriptionn'],$row['photo'],$row['prix']);
        }
        }   
    }

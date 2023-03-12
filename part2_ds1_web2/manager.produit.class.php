<?php

class manager{
  
    public function header()
    {
       
    }


    function create_produit()
    {
        
      $host = "localhost";  
      $username = "root";  
      $password = "";  
      $database = "site";  
      $message = "";
        $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if (isset($_POST['referance']) && isset($_POST['categorie']) && isset($_POST['titre'])&& isset($_POST['descriptionn'])&& isset($_POST['photo'] ) && isset($_POST['prix'] )&& isset($_POST['stock'])) {
        $referance = $_POST['referance'];
        $categorie= $_POST['categorie'];
        $titre = $_POST['titre'];
        $descriptionn= $_POST['descriptionn'];
        $photo = $_POST['photo'];
        $prix= $_POST['prix'];
        $stock = $_POST['stock'];
        $sql = 'INSERT INTO produit(id_produit, referance, categorie, titre, descriptionn, photo, prix, stock) VALUES(NULL, :referance, :categorie, :titre, :descriptionn, :photo, :prix, :stock)';
        $statement = $connect->prepare($sql);
        $result = $statement->execute([
            ':referance' => $referance,
            ':categorie' => $categorie,
            ':titre' => $titre,
            ':descriptionn' => $descriptionn,
            ':photo' => $photo,
            ':prix' => $prix,
            ':stock' => $stock,
        ]);
        
        if (!$result) {
            // handle the error, for example:
            $error = $statement->errorInfo();
            echo "Error inserting data into the database: " . $error[2];
        }
      }}
    public function get ($referance){
      $host = "localhost";  
      $username = "root";  
      $password = "";  
      $database = "site";  
      $message = "";
        $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt =$connect->prepare('SELECT referance, categorie, titre, descriptionn, photo , prix , stock  FROM produit WHERE referance = ?');
      $stmt->execute([$referance]);
      while ($row = $stmt->fetch()) {
       return new produit ( $row['id_produit'],$row['referance'],$row['categorie'],$row['titre'],$row['descriptionn'],$row['photo'],$row['prix'], $row['stock'],);
      }
      }   
  }
?>

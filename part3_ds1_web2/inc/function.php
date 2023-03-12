<?php
function rechercheproduits($keywords){

$conn= connect();
  
  //2-creation de la requette
  $requette="SELECT * FROM produit WHERE titre LIKE '%$keywords%'  ";
  
  //3-exection la requette
  $resultat=$conn->query($requette);
  
  //4- resultat de requette 
  
  $produits=$resultat -> fetchALL();
  
  //var_dump($produits);
  return $produits;
   }
   function getProduitById($id_produit){

    $conn= connect();
      
      //2-creation de la requette
      $requette="SELECT * FROM produit WHERE id = $id_produit  ";
      
      //3-exection la requette
      $resultat=$conn->query($requette);
      
      //4- resultat de requette 
      
      $produit=$resultat -> fetch();
      
      //var_dump($produits);
      return $produit;
       }
       function getAllProduct(){

        $conn= connect();
        
        //2-creation de la requette
        $requette="SELECT * FROM produit";
        
        //3-exection la requette
        $resultat=$conn->query($requette);
        
        //4- resultat de requette 
        
        $produit=$resultat -> fetchALL();
        
        //var_dump($produits);
        return $produit;
         }
      
      ?>
<?php
function connect(){
  // 1- conexion vers la bd
  $servername = "localhost";
  $DBuser = "root";
  $DBpassword = "";
  $DBname = "boutique";
  
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

    return $conn;
}
<?php

session_start(); 
 require("connect.php");

$stars = $_POST["stars"];
$review = $_POST["review"];
$ingredient1 = $_POST["ingredient1"];
$ingredient2 = $_POST["ingredient2"];
$ingredient3 = $_POST["ingredient3"];
$ingredient4 = $_POST["ingredient4"];
$ingredient5 = $_POST["ingredient5"];
$ingredient6 = $_POST["ingredient6"];
$ingredient7 = $_POST["ingredient7"];
$ingredient8 = $_POST["ingredient8"];
$ingredient9 = $_POST["ingredient9"];
$ingredient10 = $_POST["ingredient10"];
$ingredient11 = $_POST["ingredient11"];
$ingredient12 = $_POST["ingredient12"];
$ingredient13 = $_POST["ingredient13"];
$ingredient14 = $_POST["ingredient14"];
$ingredient15 = $_POST["ingredient15"];
$ingredient16 = $_POST["ingredient16"];
$ingredient17 = $_POST["ingredient17"];


$req = "INSERT INTO couscous(stars, review, ingredient1, ingredient2, ingredient3, ingredient4, ingredient5, ingredient6, ingredient7, ingredient8, ingredient9, ingredient10, ingredient11, ingredient12, ingredient13, ingredient14, ingredient15, ingredient16, ingredient17) VALUES ('$stars', '$review', '$ingredient1', '$ingredient2', '$ingredient3', '$ingredient4', '$ingredient5', '$ingredient6', '$ingredient7', '$ingredient8', '$ingredient9', '$ingredient10', '$ingredient11', '$ingredient12', '$ingredient13', '$ingredient14', '$ingredient15', '$ingredient16', '$ingredient17')";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $req)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"sssssssssssssssssss",
                       $stars,
                       $review,
                       $ingredient1,
                       $ingredient2,
                       $ingredient3,
                       $ingredient4, 
                       $ingredient5, 
                       $ingredient6, 
                       $ingredient7, 
                       $ingredient8,
                       $ingredient9, 
                       $ingredient10, 
                       $ingredient11, 
                       $ingredient12, 
                       $ingredient13, 
                       $ingredient14, 
                       $ingredient15, 
                       $ingredient16, 
                       $ingredient17);

mysqli_stmt_execute($stmt);

echo "<h1>بالشفا</h1>";
?>
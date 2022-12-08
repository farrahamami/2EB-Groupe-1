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

$req = "INSERT INTO tajine(stars, review, ingredient1, ingredient2, ingredient3, ingredient4, ingredient5, ingredient6, ingredient7, ingredient8, ingredient9, ingredient10) VALUES ('$stars', '$review', '$ingredient1', '$ingredient2', '$ingredient3', '$ingredient4', '$ingredient5', '$ingredient6', '$ingredient7', '$ingredient8', '$ingredient9', '$ingredient10')";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $req)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssssssssss",
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
                   );

mysqli_stmt_execute($stmt);

echo "<h1>بالشفا</h1>";
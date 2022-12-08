<?php
require('configuration.php');
session_start();

$u = $_POST['username'];

$_SESSION['username'];
$p = $_POST['password'];

$req= "SELECT * FROM utilisateurs WHERE nom_utilisateur='$u' and pass_utilisateurs='$p'";

$res =mysqli_query($conn, $req);
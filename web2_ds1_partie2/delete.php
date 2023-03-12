<?php

require "manager.class.php";
$M = new manager_membre();
$M->delete();
header("Location:gestion_membre.php");
session_start(); 
?>

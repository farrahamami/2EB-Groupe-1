<?php session_start(); 
 require("connect.php");
 require "manager.class.php";
 $M = new manager_membre();
 echo $M->headeradmin();
 $M->create();?>
furm boutique
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<footer>
<?php  
$M = new manager_membre();
 echo $M->footer();
?>
</footer>
</html>
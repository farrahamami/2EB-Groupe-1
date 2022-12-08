<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacter";



$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
    die("failed to connect".mysqli_connect_error());

if(isset($_POST['submit'])){
  
$name=$_POST['nom'];
$email= $_POST['email'];
$phone= $_POST['numero'];
$message= $_POST['message'];


$sql ="INSERT INTO contact(nom_prenom,email,numero,sms) VALUES ('$name','$email','$phone','$message')";


if(mysqli_query($con,$sql)){
  
 echo "<center><font size=10 color='red'>Insertion terminée avec succès </font></center>";

}else{
    echo "<center><font size=10 color='red'>La requête a echouée</font></center>";

}




}
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $req1="DELETE FROM contact WHERE id='$id'";
    if(mysqli_query($con,$req1)){
  
        echo "<center><font size=10 color='red'>suppression terminée avec succès </font></center>";
       
       }else{
           echo "<center><font size=10 color='red'>La requête a echouée</font></center>";
       
       }
}
if(isset($_POST['modifier'])){
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $id=$_POST['id'];
    $message=$_POST['message'];
    $numero=$_POST['numero'];
    $req2="UPDATE contact set nom_prenom = '$nom',email='$email',sms='$message',numero='$numero' WHERE id='$id'";
    if(mysqli_query($con,$req2)){
  
        echo "<center><font size=10 color='red'>modification terminée avec succès </font></center>";
       
       }else{
           echo "<center><font size=10 color='red'>La requête a echouée</font></center>";
       
       }
    
}
?>
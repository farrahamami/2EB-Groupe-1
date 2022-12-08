<?php
require('configuration.php');
if(isset($_POST['submit'])){
    $u=$_POST['nom'];
    $e=$_POST['email'];
    $p=$_POST['mdp'];
    $req1="INSERT INTO utilisateurs(non_utilisateur,email_utilisateur,type,pass_utilisateur)values('$u','$e','user','$p')  ";
    if(mysqli_query($con,$req1)){
  
        echo "<div>
        <center><font size=10 color='red'>inscrit avec succes </font></center>
        <p>cliquer ici <a href='connexion.html'>connecter</a></p>
        
        </div>";
       
       }else{
           echo "<center><font size=10 color='red'>La requête a echouée</font></center>";
       
       }




}


?>
<?php
define('serveur','localhost');
define('utilisateur','root');
define('motdepasse','');
define('base','bd7');
$conn=mysqli_connect(serveur,utilisateur,motdepasse,base);
if($conn==false){
    die("impossible de se connecter".mysqli_connect_error());
}




?>
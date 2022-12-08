<?php

$servername="localhost";
$username="root";
$password="";
$database="bd2";


$conn = mysqli_connect($servername,$username,$password,$database);

if ($conn==false){
    die("imoossible de se connecter." .mysqli_connect_error());
}
if (isset($_POST["buttn"])) {
$np = $_POST["nompren"];
$l = $_POST["localisation"];
$e = $_POST["email"];
$n = $_POST["num"];
$pd = $_POST["passw"];
$pv = $_POST["passwordverif"];
$g = $_POST["gender"];



$sql = " INSERT into signin(nompren,localisation,email,num,passw,passwordverif,gender) 
VALUES ('$np' ,'$l','$e','$n','$pd','$pv',$g')";
  $res=mysqli_query($conn,$sql);
  if($res){
  echo "<div>
       <h3> تسجيلك معانا تم <h3>
       <p>إنزل هنا بش تدخل لل compte متاعك <a href='login.html'>دخول </a></p>
        </div>";
  } else echo "التسجيل ما تعداش";
 
} mysqli_close($conn);
?>












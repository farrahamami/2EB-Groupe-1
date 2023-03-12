<?php
require "manager.class.php";
$M = new manager_membre();
 echo $M->headeradmin();
session_start();  
$host = "localhost";  
$username = "root";  
$password = "";  
$database = "site";  
$message = "";
$connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM membre';
$statement = $connect->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);

 ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<br></br>
  <br></br>
  <br></br> 
   <br></br> <br></br>
  <br></br>
  <br></br> 
   <br></br>
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <div class="card text-center">
  <div class="card-header">

      </div>
    </div>
  </div>
</div>

</body>
</html>

































      </table>
    </div>
  </div>
</div>
</body>
<footer>
<?php  
$M = new manager_membre();
 echo $M->footer();
?>
</footer>
</html>
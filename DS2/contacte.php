<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <title>Liste</title>
</head>

<body>


  <div class="container">
    <center>
        <h5>LISTE DES CONTACTS</h5>
    </center>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Nom et prenom</th>
          <th>Email</th>
          <th>Numero</th>
          <th>Message</th>
          <th>Options</th>
        </tr>
      </thead>

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "contacter";
      
      
      
      $con = mysqli_connect($servername,$username,$password,$dbname);
      if(!$con)
          die("failed to connect".mysqli_connect_error());
    
     
      $n = 0;
      $result = mysqli_query($con, "SELECT * FROM contact");
      while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
          <td><?php $n++ ?></td>
          <td><?php echo $row['nom_prenom'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><?php echo$row['numero'] ?></td>
          <td><?php echo$row['sms'] ?></td>
          <td>
            <a href="update.php?id=<?php echo $row['id'] ?>">
                <button type="button">Modifier</button>
            </a>
            <a href="test.php?id=<?php echo $row['id'] ?>">
                <button type="button">Supprimer</button>
            </a>
          </td>
        </tr>
      <?php }

      mysqli_close($con);
      ?>
    </table>
  </div>

</body>

</html>
<?php
require "manager.class.php";
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
$M = new manager_membre();
 echo $M->headeradmin()
 ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Tout les membre</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
        <tr>
          <th>id_membre</th>
          <th>pseudo</th>
          <th>Email</th>
          <th>action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id_membre; ?></td>
            <td><?= $person->pseudo; ?></td>
            <td><?= $person->email; ?></td>
            <td>
              <a href="edit.php?id_member=<?= $person->id_membre ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id_membre=<?= $person->id_membre ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
      <a href="create.php?id_member=<?= $person->id_membre ?>" class="btn btn-info">ajouter</a>

    </div>
  </div>
</div>
</body>
<footer>
    <?php $M = new manager_membre();
 echo $M->footer();
 ?>
</footer>
</html>

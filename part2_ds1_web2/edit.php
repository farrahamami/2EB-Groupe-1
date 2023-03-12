<?php
session_start(); 
 require("connect.php");
 require "manager.class.php";
 $M = new manager_membre();
 echo $M->headeradmin();
 $M->create();
 ?>
 <div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $edit->$nom; ?>" type="text" name="pseudo" id="pseudo" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $edit->$email; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<footer>
    <?php $M = new manager_membre();
 echo $M->footer();
 ?>
</footer>
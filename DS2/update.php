<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
    <?php
    
        if(isset($_GET['id']))
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "contacter";
            
            
            
            $con = mysqli_connect($servername,$username,$password,$dbname);
            if(!$con)
                die("failed to connect".mysqli_connect_error());
            $id=($_GET['id']);
            $result = mysqli_query($con, "SELECT * FROM contact WHERE id='$id'");
            while ($row = mysqli_fetch_array($result)) { ?>
        
           <h5>MODIFICATION</h5>
            <form  action="test.php" method="POST">
                <input type="hidden" name="id" value="<?php echo$row['id']; ?>">
                Nom et prenom :
                <input type="text" value="<?php echo$row['nom_prenom']; ?>" name="nom"> <br>
                Numero :
                <input type="number" value="<?php echo$row['numero']; ?>" name="numero"> <br>
                Email :
                <input type="text" value="<?php echo$row['email']; ?>" name="email"> <br>
                Message :
                <textarea name="message" id="<?php echo$row['sms']; ?>" cols="20" rows="10"></textarea> <br>
                <input type="submit" value="enregister" name="modifier">
            </form>
            <?php

            }
        }else{
            echo"Pas de resultat";
        }
    ?>
</body>
</html>



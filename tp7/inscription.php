<?php
require('configuration.php');

$req = "INSERT INTO utilisateurs (nom_utilisateur, email_utilisateur, type, pass_utilisateur) VALUES ('$u', '$e', 'user', '$p')";

$res = mysqli_query($cpnn, $req);
if ($res) {
	echo "<div>
	<h3>Vous etes inscrit aves succès.</h3>
	<p>Cliquez ici pour vous <a href="connexion.html">connecter</a></p>
        </div>"
} else echo'requete non executée';

?>
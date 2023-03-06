<!DOCTYPE html>
<html>
<head>
	<title>Calculatrice</title>
</head>
<body>
	<h1>Calculatrice</h1>

	<form method="post" action="exercice4.php">
		<label for="n1">Nombre 1:</label>
		<input type="text" name="n1" id="n1">

        <label for="operation">Opération:</label>
		<select name="operation" id="operation">
			<option value="addition">+</option>
			<option value="soustraction">-</option>
			<option value="multiplication">*</option>
			<option value="division">/</option>
		</select>
		<label for="n2">Nombre 2:</label>
		<input type="text" name="n2" id="n2">

		

		<input type="submit" value="Calculer">
	</form>

	<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$n1 = $_POST["n1"];
		$n2 = $_POST["n2"];
		$operation = $_POST["operation"];

	
		switch ($operation) {
			case "addition":
				$resultat = $n1 + $n2;
				echo "<p>$n1 + $n2 = $resultat</p>";
				break;
			case "soustraction":
				$resultat = $n1 - $n2;
				echo "<p>$n1 - $n2 = $resultat</p>";
				break;
			case "multiplication":
				$resultat = $n1 * $n2;
				echo "<p>$n1 * $n2 = $resultat</p>";
				break;
			case "division":
				if ($n2 == 0) {
					echo "<p>Erreur: division par zéro</p>";
				} else {
					$resultat = $n1 / $n2;
					echo "<p>$n1 / $n2 = $resultat</p>";
				}
				break;
			default:
				echo "<p>Opération invalide</p>";
		}
	}
	?>

</body>
</html>
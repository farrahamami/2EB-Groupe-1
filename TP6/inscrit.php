<?php
$s='localhost';
$n='root';
$p='';
$d='BD1';

$conn=mysqli_connect($s,$n,$p,$d);
if (!$conn) {
	die('Erreur: ' .mysqli_connect_error());
}
else {
	$code=$_POST['c'];
	$n= $_POST['n'];
	$pren=$_POST['_p'];
	$req="insert into table 1 values($code, '$n', '$pren')";
}
	if (mysqli_query($conn, $req))
	echo ("insertion valide");
else echo "insertion ivalide";
mysqli_close($conn);

?>
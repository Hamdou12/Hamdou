<?php
include_once "connexion.php";
//$id=$_GET['idmed'];
$req = mysqli_query($conn , "DELETE FROM medecins WHERE idmed=5");
header("location:table.php")
?>;
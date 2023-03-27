<?php
include_once "connexion.php";
//$id=$_GET['idint'];
$req = mysqli_query($conn , "DELETE FROM intendant WHERE idint=5");
header("location:table_intendant.php")
?>;
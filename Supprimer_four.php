<?php
include_once "connexion.php";
//$id=$_GET['idfour'];
$req = mysqli_query($conn , "DELETE FROM fournisseur WHERE idfour=5");
header("location:table_fournisseur.php")
?>;
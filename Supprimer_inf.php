<?php
include_once "connexion.php";
//$id=['idinf'];
$req = mysqli_query($conn , "DELETE FROM infirmiers WHERE idinf=5");
header("location:table_inf.php")
?>;
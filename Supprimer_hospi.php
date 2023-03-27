<?php
include_once "connexion.php";
//$id=['idhospi'];
$req = mysqli_query($conn , "DELETE FROM hospitilisation WHERE Num_chambre=5");
header("location:table_hospitalisation.php")
?>;
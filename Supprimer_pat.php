<?php
include_once "connexion.php";
//$id=$_GET['idpat'];
$req = mysqli_query($conn , "DELETE FROM patients WHERE idpat=2");
header("location:table_patient.php")
?>;
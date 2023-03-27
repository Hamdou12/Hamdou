<?php
include_once "connexion.php";
$id=$_GET['idrecep'];
$req = mysqli_query($conn , "DELETE FROM receptionniste WHERE idrecep=5");
header("location:table_receptionniste.php")
?>;
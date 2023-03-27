<?php
include_once "connexion.php";
$req = mysqli_query($conn , "DELETE FROM comptable WHERE idcomp=5");
header("location:table_comptable.php")
?>;
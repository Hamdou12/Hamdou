<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Nom du serveur
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$dbname = " bd_weral_ak_jamm"; // Nom de la base de données

// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "" ,"bd_weral_ak_jamm");

// Vérifier la connexion
if (!$conn) {
    die("Connexion à la base de données échouée : " . mysqli_connect_error());
}
?>

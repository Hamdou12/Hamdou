<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page Index</title>
	<link rel="stylesheet" href="INDEX.css">
</head>
<body>
	<?php
      include_once "connexion.php"
	?>
	<header>
		<div class="logo">
		  <img src="Img_og.jpg" alt="Logo de l'hôpital">
		</div>
		<nav>
		  <ul>
			<li><a href="#">Accueil</a></li>
			<li><a href="table_hospitalisation.php">Hospitalisation</a></li>
			<li><a href="rendez_vous.php">Rendez Vous</a></li>
			<li><a href="table_patient.php">Dossier Patient</a></li>
		  </ul>
		</nav>
	  </header>	
	  <div class="container">
		<div class="sidebar sidebar-left">
		  <h2>Personnel soignant</h2>
		  <ul>
			<li><a href="table.php">Médecins</a></li>
			<li><a href="table_inf.php">Infirmiers</a></li>
			<li><a href="">Pharmaciens</a></li>
			<li><a href="">Aide soignant</a></li>
			<li><a href="">Pediatre</a></li>
		  </ul>
		</div>
		<iframe class="iframe" src="video_site.mp4" frameborder="1" ></iframe>
		<div class="sidebar sidebar-right">
		  <h2>Personnel non soignant</h2>
		  <ul>
			<li><a href="table_comptable.php">Comptables</a></li>
			<li><a href="table_receptionniste.php">Receptionniste</a></li>
			<li><a href="table_intendant.php">Intendant</a></li>
			<li><a href="">Fournisseurs</a></li>
			<li><a href="">Techniciens</a></li>
		  </ul>
		</div>
	  </div>
</body>
<footer>
	<div class="footer-content">
	  <div class="footer-section about">
		<h2 class="logo">WERAL AK JAMM</h2>
		<p>
		  Nous sommes un hôpital dédié à offrir des soins de qualité à nos patients.
		</p>
		<div class="contact">
		  <span><i class="fa fa-phone"></i> 0123456789</span>
		  <span><i class="fa fa-envelope"></i> info@nomdelhopital.com</span>
		</div>
	  </div>
	  <div class="footer-section links">
		<h2>Liens rapides</h2>
		<ul>
		  <li><a href="#">Accueil</a></li>
		  <li><a href="#">Services</a></li>
		  <li><a href="#">À propos</a></li>
		  <li><a href="#">Contact</a></li>
		</ul>
	  </div>
	  <div class="footer-section follow">
		<h2>Nous suivre</h2>
		<div class="social-links">
		  <a href="#"><i class="fa fa-facebook">facebool</i></a>
		  <a href="#"><i class="fa fa-twitter">twitter</i></a>
		  <a href="#"><i class="fa fa-instagram">Instagram</i></a>
		  <a href="#"><i class="fa fa-linkedin">linkedin</i></a>
		</div>
	  </div>
	</div>
	<div class="footer-bottom">
	  &copy; 2023 | Nom de l'Hôpital | Tous droits réservés
	</div>
  </footer>
  
</html>
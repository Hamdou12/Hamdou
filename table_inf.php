<!DOCTYPE html>
<html>
<head>
	<div class="flex">
		<form>
		  <input type="text" placeholder="Entrez le code medecin" />
		  <button type="submit">RECHERCHE</button>
		</form>
	  </div>
	<div class="flex_btn">
		<a href="Ajouter_inf.php"> <button class="btn_ajouter"> Ajouter</button></a>
		<a href=""> <button class="btn_ajouter">Afficher la liste</button></a>
	</div>
	<title>Tableau de garde</title>
	<style>
		body{
			background: url(img1.jpg) no-repeat center center/cover;
		}
		table {
			border-collapse: collapse;
			width: 50%;
			margin-left: 300px;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}
		.btn_ajouter{
			margin-top: 150px;
			margin-left: 300px;
			margin-bottom: 20px;
			color:#4CAF50;
			font-size: 15px;
			padding: 3px;
		}
		a{
			font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif ;
			color: white;
			font-size: 15px;
			padding: 3px;
			text-decoration: none;
		}
		td{
			font-size: 20px;
			font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
		}
		.rouge{
			color: red;
		}
		.bleu{
			color: blue;
		}
		form {
        display: flex;
      }

      input[type="text"] {
        width: 77%;
        padding: 12px 20px;
        margin-right: 10px;
        border: none;
        border-radius: 4px;
        background-color: #f2f2f2;
      }

      button[type="submit"] {
        width: 40%;
        background-color: #4caf50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
		.flex{
		display: flex;
		margin-left: 500px;
		margin-bottom: 0;
		margin-top: 60px;
	  }

	</style>
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Code Infirmiere</th>
				<th>Heure de garde</th>
                <th>Modifier</th>
                <th>Supprimer</th>
			</tr>
		</thead>
		<?php
		include_once "connexion.php";
		$req=mysqli_query($conn,"SELECT * FROM infirmiers");
		while($row=mysqli_fetch_assoc($req)){
				?>
				<tr>
					<td><?=$row['Nom_infirmier']?></td>
					<td><?=$row['Prenom_infirmier']?></td>
					<td><?=$row['code_infirmier']?></td>
					<td><?=$row['Nombre_heure_gardes']?></td>
					<td><a href="modifier_inf.php"?id=<?=$row['idinf']?> class="bleu">Modifier</a></td>
					<td><a href="Supprimer_inf.php"?id=<?=$row['idinf']?> class="rouge">Supprimer</a></td>
				</tr> 
				<?php
			}
?>
	</table>

</body>
</html>

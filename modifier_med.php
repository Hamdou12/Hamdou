<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        body {
	margin: 0;
	padding: 0;
	background-color: #f2f2f2;
	font-family: sans-serif;
}

.signup {
	width: 400px;
	margin: 50px auto;
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0px 5px 10px rgba(0,0,0,0.1);
}

.signup-header {
	padding: 20px;
	background-color: #4CAF50;
	color: #fff;
	border-top-left-radius: 5px;
	border-top-right-radius: medecin
}
.signup-form {
	padding: 20px;
}

form {
	display: flex;
	flex-direction: column;
}

label {
	margin-top: 10px;
	color: #777;
}

input[type="text"],
input[type="email"],
input[type="password"] {
	padding: 10px;
	border-radius: 5px;
	border: none;
	margin-bottom: 20px;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: white;
	padding: 10px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #45a049;
}

    </style>
</head>
<body>
        <?php
            include_once "connexion.php";
            //$id=$_GET['idmed'];
            $req=mysqli_query($conn," SELECT * FROM medecins WHERE idmed=2");
            $row=mysqli_fetch_assoc($req);
            if(isset($_POST['button'])){
                extract($_POST);
            if(isset($Nom_medecin) && isset($Prenom_medecin) &&isset($code_medecin) && isset($nombre_heure_gardes)){
                    $req=mysqli_query($conn , "UPDATE medecins SET Nom_medecin=$Nom_medecin, Prenom_medecin=$Prenom_medecin ,code_medecin=$code_medecin , nombre_heure_gardes=$nombre_heure_gardes WHERE idmed=2");
                    if($req){
                        header("location:table_med.php");
                    }else{
                        echo "Ajout non effectuer";
                    }
               }else{
                echo " Remplissez tous les champs";

               };
            };
        ?>
        <div class="signup">
            <div class="signup-header">
                <h1>Modifier</h1>
            </div>
            <div class="signup-form">
                <form action="" , method="POST">
                    <label >Nom_medecin</label>
                    <input  name="Non_medecin" placeholder="Entrez votre nom" value="<?=$row['Non_medecin']?>">
    
                    <label >Prenom_medecin</label>
                    <input  name="Prenom_medecin" placeholder="Entrez votre Prenom" value="<?=$row['Prenom_medecin']?>">
    
                    <label >code_medecin</label>
                    <input name="code_medecin" placeholder="Entrez votre Code Patient" value="<?=$row['code_medecin']?>">

                    <label >Nombre_heure_gardes</label>
                    <input name="Nombre_heure_gardes" placeholder="Entrez votre Code Patient" value="<?=$row['Nombre_heure_gardes']?>">
					
                    <input type="submit" value="Soumettre Mon dossier" name="button">
                </form>
            </div>
        </div>
</body>
</html>
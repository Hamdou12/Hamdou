
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
	border-top-right-radius: 5px;
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
    <body>
        <?php
        if(isset($_POST['button'])){
            extract($_POST);
            if(isset($Nom_receptionniste) && isset($Prenom_receptionniste) &&(isset($code_receptionniste)));
                include_once "connexion.php";
                $req=mysqli_query($conn ," INSERT INTO medecins VALUES(NULL , '$Nom_medecin' , '$Prenom_medecin' , '$code_medecin' ,'$Nombre_heure_gardes')" );
                if($req){
                    header("location:table.php");
                }else{
                    echo "Ajout non effectuer";
                }
        }else{
            echo " Remplissez tous les champs";

        };
        
        ?>
        <div class="signup">
            <div class="signup-header">
                <h1>Ajouter</h1>
            </div>
            <div class="signup-form">
                <form action="" , method="POST">
                    <label for="username">Nom_medecin</label>
                    <input  name="Nom_medecin" placeholder="Entrez votre nom">
    
                    <label for="email">Prenom_medecin</label>
                    <input  name="Prenom_medecin" placeholder="Entrez votre Prenom">
    
                    <label for="password">code_medecin</label>
                    <input name="code_medecin" placeholder="Entrez votre Code Patient">

                    <label for="password">Nombre_heure_gardes</label>
                    <input name="Nombre_heure_gardes" placeholder="Entrez votre Code Patient">
					
                    <input type="submit" value="Ajouter" name="button">
                </form>
            </div>
        </div>
    </body>
</body>
</html>
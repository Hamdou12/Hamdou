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
        <?php
            include_once "connexion.php";
            //$id=['idinf'];
            $req=mysqli_query($conn," SELECT * FROM infirmiers WHERE idinf= 3");
            $row=mysqli_fetch_assoc($req);
            if(isset($_POST['button'])){
                extract($_POST);
                if(isset($Nom_infirmier) && isset($Prenom_infirmier) && isset($code_infirmier) && isset($heure_de_gardes)){
                    $req=mysqli_query($conn , "UPDATE infirmiers SET Nom_infirmier=$Nom_infirmier, Prenom_infirmier=$Prenom_infirmier ,code_infirmier=$code_infirmier ,heure_de_gardes=$heure_de_gardes WHERE idinf=3");
                    if($req){
                        header("location:table_inf.php");
                    }else{
                        echo "Ajout non effectuer";
                    }
               }else{
                echo "";

               };
            };
        ?>
        <div class="signup">
            <div class="signup-header">
                <h1>Modifier</h1>
            </div>
            <div class="signup-form">
                <form action="" , method="POST">
                    <label >Nom_infirmier</label>
                    <input  name="Nom_infirmier" placeholder="Entrez votre nom" value="<?=$row['Nom_infirmier']?>">
    
                    <label >Prenom_infirmier</label>
                    <input  name="Prenom_infirmier" placeholder="Entrez votre Prenom" value="<?=$row['Prenom_infirmier']?>">
    
                    <label >code_medecin</label>
                    <input name="code_infirmier" placeholder="Entrez votre Code infirmier" value="<?=$row['code_infirmier']?>">

                    <label >Nombre_heure_gardes</label>
                    <input name="Nombre_heure_gardes" placeholder="Entrez votre Code Patient" value="<?=$row['Nombre_heure_gardes']?>">
					
                    <input type="submit" value="Modifier" name="button">
                </form>
            </div>
        </div>
</body>
</html>
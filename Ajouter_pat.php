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
            if(isset($Nom_patient) && isset($Prenom_patient) &&(isset($Age_patient))  && (isset($code_patient)) && (isset($Num_Assurance)) && (isset($Num_Tel)));
                include_once "connexion.php";
                $req=mysqli_query($conn ," INSERT INTO patient VALUES(NULL , '$Nom_patient' , '$Prenom_patient' , '$Age_patient', '$code_patient' , '$Num_Assurance' ,'$Num_Tel'" );
                if($req){
                    header("location:table_patient.php");
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
                    <label for="username">Nom_patient</label>
                    <input  name="Nom_patient" placeholder="Entrez votre nom">
    
                    <label >Prenom_patient</label>
                    <input  name="Prenom_patient" placeholder="Entrez votre Prenom">
    
                    <label >Age_patient</label>
                    <input name="Age_patient" placeholder="Entrez votre Code Patient">

                    <label >code_patient</label>
                    <input name="code_patient" placeholder="Entrez votre Code Patient">

                    <label >Num_Assurance</label>
                    <input name="Num_Assurance" placeholder="Entrez votre Num_Assurance">

                    <label >Num_Tel</label>
                    <input name="Num_Tel" placeholder="Entrez votre Num_Tel">
					
					
                    <input type="submit" value="Ajouter un patient" name="button">
                </form>
            </div>
        </div>
    </body>
</body>
</html>
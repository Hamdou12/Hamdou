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
            //$id=$_GET['idint'];
            $req=mysqli_query($conn," SELECT * FROM intendant WHERE idint=4");
            $row=mysqli_fetch_assoc($req);
            if(isset($_POST['button'])){
                extract($_POST);
                if(isset($Nom_intendant) && isset($Prenom_intendant)  && $code_intendant ){
                    $req=mysqli_query($conn , "UPDATE intendant SET Nom_intendant=$Nom_intendant, Prenom_intendant=$Prenom_intendant , code_intendant=$code_intendant WHERE idint=4 ");
                    if($req){
                        header("location:intendant.php");
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
                    <label >Nom_intendant</label>
                    <input  name="Nom_intendant" placeholder="Entrez votre nom" value="<?=$row['Nom_intendant']?>">
    
                    <label >Prenom_intendant</label>
                    <input  name="Prenom_intendant" placeholder="Entrez votre Prenom" value="<?=$row['Prenom_intendant']?>">
    
                    <label >code_intendant</label>
                    <input name="code_intendant" placeholder="Entrez votre Code Patient" value="<?=$row['code_intendant']?>">

                    <input type="submit" value="Soumettre Mon dossier" name="button">
                </form>
            </div>
        </div>
</body>
</html>
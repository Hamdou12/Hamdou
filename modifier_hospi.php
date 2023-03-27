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
            $req=mysqli_query($conn," SELECT * FROM hospitalisation WHERE Num_chambre=4");
            $row=mysqli_fetch_assoc($req);
            if(isset($_POST['button'])){
                extract($_POST);
                if(isset($Num_chambre) && isset($code_patient) && isset($code_medecin)  && isset($code_infirmier)&& isset($code_comptable) && isset($Date_Entre)  && isset($Date_sortie)){
                    $req=mysqli_query($conn , "UPDATE hospitilisation SET Num_chambre=$Num_chambre, code_patient=$code_patient ,code_medecin=$code_medecin , code_infirmier=$code_infirmier , code_comptable=$code_comptable,Date_Entre=$Date_Entre, Date_sortie=$Date_sortie  WHERE Num_chambre=4");
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
                    <label >Num_chambre</label>
                    <input  name="Num_chambre" placeholder="Entrez votre nom" value="<?=$row['Num_chambre']?>">
    
                    <label >code_patient</label>
                    <input  name="code_patient" placeholder="Entrez votre Prenom" value="<?=$row['code_patient']?>">
    
                    <label >code_medecin</label>
                    <input name="code_medecin" placeholder="Entrez votre Code Patient" value="<?=$row['code_medecin']?>">

                    <label >code_infirmier</label>
                    <input name="code_infirmier" placeholder="Entrez votre Code Patient" value="<?=$row['code_infirmier']?>">
    
                    <label >code_comptable</label>
                    <input name="code_comptable" placeholder="Entrez votre Code Patient" value="<?=$row['code_comptable']?>">

                    <label >Date_Entre</label>
                    <input name="Date_Entre" placeholder="Entrez votre Code Patient" value="<?=$row['Date_Entre']?>">

                    
                    <label >Date_sortie</label>
                    <input name="Date_sortie" placeholder="Entrez votre Code Patient" value="<?=$row['Date_sortie']?>">
					
					
                    <input type="submit" value="Modifier" name="button">
                </form>
            </div>
        </div>
</body>
</html>
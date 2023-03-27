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
            //$id=$_GET['idrecep'];
            $req=mysqli_query($conn," SELECT * FROM receptionniste WHERE idrecept=3");
            $row=mysqli_fetch_assoc($req);
            if(isset($_POST['button'])){
                extract($_POST);
                if(isset($Nom_receptionniste) && isset($Prenom_receptionniste)  && $code_receptionniste ){
                    $req=mysqli_query($conn , "UPDATE receptionniste SET Nom_receptionniste=$Nom_receptionniste, Prenom_receptionniste=$Prenom_receptionniste , code_receptionniste=$code_receptionniste WHERE idrecept=3");
                    if($req){
                        header("location:table_recep.php");
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
                    <label >Nom_receptionniste</label>
                    <input  name="Nom_receptionniste" placeholder="Entrez votre nom" value="<?=$row['Nom_receptionniste']?>">
    
                    <label >Prenom_receptionniste</label>
                    <input  name="Prenom_receptionniste" placeholder="Entrez votre Prenom" value="<?=$row['Prenom_receptionniste']?>">
    
                    <label >code_receptionniste</label>
                    <input name="code_receptionniste" placeholder="Entrez votre Code Patient" value="<?=$row['code_receptionniste']?>">

                    <input type="submit" value="Ajouter" name="button">
                </form>
            </div>
        </div>
</body>
</html>
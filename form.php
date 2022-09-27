<?php
    require("connexion.php");
    if(isset($_POST["nom"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        mysqli_query($connexion, "INSERT INTO user(nom, prenom) VALUES('$nom', '$prenom')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <div class="container ">
         <form action="insert.php" method="POST">
            <div>
                <input type="text" name="nom" placeholder="Votre nom">
            </div>
            <div>
                <input type="text" name="prenom" placeholder="Votre prenom">
            </div>
            <div>
                <button name="submit">Envoyer</button>
            </div>
        </form>
    </div>
</body>
</html>
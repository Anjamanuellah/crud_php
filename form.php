<?php
    require("connexion.php");
    if(isset($_POST["nom"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        mysqli_query($connexion, "INSERT INTO users(nom, prenom) VALUES('$nom', '$prenom')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
    <body>
        <div class="container">
            <div>
                <h1 class="text is-family-monospace">INCRIPTION TAFA 2.0</h1>
            </div>
            <div class="info">
                <form class="box" action="insert.php" method="post">
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control ">
                            <input class="input text is-uppercase" type=" text " name="nom" placeholder="Votre nom">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Prenom(s)</label>
                        <div class="control">
                            <input class="input text is-capitalized" type="text " name="prenom" placeholder="Votre prenom">
                        </div>      
                    </div>
                    <div class="btn">
                        <button class="button is-link is-light" name="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php
    require_once("connexion.php");
    $id = $_GET["Getid"];
    $query = "SELECT * FROM users WHERE id='".$id."'";
    $result = mysqli_query($connexion, $query);

    while($row=mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $nom = $row['nom'];
        $prenom = $row['prenom'];
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
                <h2 class="text is-family-monospace">MODIFICATION</h2>
            </div>
            <div class="info">
                <form class="box" action="insert.php" method="post">
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input class="input text is-uppercase" type="text" name="nom" value="<?= $nom?>">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Prenom(s)</label>
                        <div class="control">
                            <input class="input text is-capitalized" type="text" name="prenom" value="<?= $prenom?>">
                        </div>      
                    </div>
                    <div class="btn">
                        <button class="button is-link is-light" name="submit" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>
<?php
    require_once("connexion.php");
    $id = $_GET["Getid"];
    $query = "SELECT * FROM user WHERE id='".$id."'";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <div class="container ">
        <form action="update.php?id=<?= $id ?>" method="POST">
            <div>
                <input type="text" name="nom" placeholder="Votre nom" value="<?= $nom?>">
            </div>
            <div>
                <input type="text" name="prenom" placeholder="Votre prenom" value="<?=$prenom ?>">
            </div>
            <div>
                <button name="update">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
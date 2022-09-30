<?php
    require_once("connexion.php");
    $query = "SELECT * FROM users";
    $result = mysqli_query($connexion, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <title>view</title>

</head>
<body>
    <div class="container ">
        <h1>LISTE TAFA 2.0</h1>
        <div class="table">
            <table class="table table is-striped" style="text-align:center">
                <tr>
                    <th>ID</th>
                    <th style="text-align:center"><strong>NOM</strong></th>
                    <th style="text-align:center"><strong>PRENOM(s)</strong></th>
                    <th style="text-align:center">ACTION</th>
                </tr>
                <?php 
                    //foreach($result as $row)
                    //{
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $nom = $row['nom'];
                        $prenom = $row['prenom'];
                ?>
                <tr>
                    <td><?=  $row['id'] ?></td>
                    <td class="text is-uppercase"><?= $row['nom'] ?></td>
                    <td class="text is-capitalized"><?=  $row['prenom']?></td>
                    <td>
                        <a href="edit.php?Getid=<?php echo $id ?>">Modifier</a>
                        <a href="suppr.php?del=<?php echo $id ?>">Supprimer</a>
                    </td>
                </tr>
                    <?php
                    } 
                    ?>
            </table>
        </div>
    </div>
</body>
</html>
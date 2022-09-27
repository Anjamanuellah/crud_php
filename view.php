<?php
    require_once("connexion.php");
    $query = "SELECT * FROM user";
    $result = mysqli_query($connexion, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>view</title>

</head>
<body>
    <div class="container ">
        <div class="row">
            <div class="col-12 col-md-6" id="inscri">
            <p>LISTE TAFA 2.0</p>
                <table>
                    <tr>
                        <th>ID</th>
                        <th><strong>NOM</strong></th>
                        <th><strong>PRENOM</strong></th>
                        <th>ACTION</th>
                    </tr>
                    <?php 

                        while($row=mysqli_fetch_assoc($result))
                    {
                            $id = $row['id'];
                            $nom = $row['nom'];
                            $prenom = $row['prenom'];
                    ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $nom ?></td>
                        <td><?php echo $prenom ?></td>
                        <td>
                            <a href="edit.php?Getid=<?php echo $id ?>">Modifier</a>
                            <a href="suppr.php?del=<?php echo $id ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php
                    } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require("connexion.php");
if(isset($_POST["update"]))
{
    $id = $_GET["id"];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    $query = "UPDATE users SET nom ='$nom', prenom ='$prenom' WHERE id='$id'";
    $result =mysqli_query($connexion, $query);
    
    if($result)
    {
        header("location:view.php");
    }
}
else{
    header('location:view.php');
}

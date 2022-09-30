<?php 
require_once("connexion.php");
if(isset($_POST['submit']))
{
    if(empty($_POST["nom"]) || empty($_POST["prenom"])){
        echo 'Completer le formulaire svp!';
    }
    else{
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];

        $query= "INSERT INTO users (nom, prenom) values('$nom', '$prenom')";
        $result = mysqli_query($connexion,$query);

        if($result){
            header("location:view.php");
        }
    }
}
else{
    header("location:form.php");
}

<?php
    require_once("connexion.php");
    if(isset($_GET["del"]))
    {
        $id = $_GET["del"];
        $query = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($connexion, $query);
        if($result)
        {
           header("location:view.php");
        } 
    }
    ?>
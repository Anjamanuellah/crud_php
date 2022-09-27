<?php
 $connexion = mysqli_connect("localhost", "root", "", "tafa2.0");

 if(!$connexion) {
    die("connexion err");
 }
<?php

    include_once "db.php";

    // session_start();

    if(empty($_SESSION['email'])){
        header('Location:connexion.php');
        exit();
    }
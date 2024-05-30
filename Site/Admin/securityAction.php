<?php

    include_once "../db.php";

    // session_start();

    if(empty($_SESSION['email'])){
        header('Location:../connexionAdmin.php');
        exit();
    }
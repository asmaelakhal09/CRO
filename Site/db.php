<?php

    $host="localhost";
    $username="root";
    $password="";
    $db="cro";

    try{
        $CONNEXION= new PDO("mysql:host=$host;dbname=$db;charset=utf8",$username,$password);
        $CONNEXION->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $e){
        echo "EChec de connexion da la base de donnée ".$e->getMessage();
    }
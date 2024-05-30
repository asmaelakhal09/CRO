<?php

    include_once 'db.php';

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email=$_POST['email'];
        $password=$_POST['password'];
    
        $REQ1="SELECT * FROM Administrateur WHERE emailAdmin=?";
        $stmt=$CONNEXION->prepare($REQ1);
        $stmt->execute([$email]);
        $result1=$stmt->fetchAll(PDO::FETCH_ASSOC);

        $REQ2="SELECT * FROM Administrateur WHERE passwordAdmin=?";
        $stm=$CONNEXION->prepare($REQ2);
        $stm->execute([$password]);
        $result2=$stm->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($email) && !empty($password)){
            if($result1 && $result2){
                session_start();
                $_SESSION['email']=$email;
                header('Location:Admin/index.php');
                exit();
            }else{
                $nonvalide="DOnnées incorrectes ! veuillez bien verifier vos coordonnées!";
            }
        }else{
                $vide="Tous les champs sont obligatoires!";
        }
    }
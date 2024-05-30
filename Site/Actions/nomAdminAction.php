<?php

    include_once '../db.php';
    session_start();

    $req="SELECT nomAdmin,prenomAdmin FROM Administrateur WHERE emailAdmin=?";
    $stmt=$CONNEXION->prepare($req);
    $stmt->execute([$_SESSION['email']]);
    $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
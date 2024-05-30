<?php

    include_once "db.php";
    session_start();

    $REQ="SELECT * FROM Candidat WHERE emailCandidat=?";
    $stmt=$CONNEXION->prepare($REQ);
    $stmt->execute([$_SESSION['email']]);
    $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);

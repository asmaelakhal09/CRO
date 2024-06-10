<?php

    session_start();
    include_once "db.php";

        $REQUETE="DELETE FROM Demande WHERE candidat=?";
        $stmt=$CONNEXION->prepare($REQUETE);
        $stmt->execute([$_SESSION['email']]);
        header('Location:candidature.php');
        exit();
<?php


include_once "../db.php";

    $REQ="SELECT * FROM demande";
    $stmt=$CONNEXION->query($REQ);
    $stmt->execute();
    $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
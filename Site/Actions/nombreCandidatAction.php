<?php

    include_once "../db.php";


    $REQ="SELECT COUNT(*) AS nombreCandidat FROM Candidat";
    $stt=$CONNEXION->query($REQ);
    $stt->execute();
    $row=$stt->fetch();
    $NombreCandidat=$row['nombreCandidat'];


    $RE="SELECT COUNT(*) AS nombreCandidature FROM demande";
    $st=$CONNEXION->query($RE);
    $st->execute();
    $rows=$st->fetch();
    $NombreCandidature=$rows['nombreCandidature'];
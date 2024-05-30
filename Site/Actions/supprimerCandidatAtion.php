<?php

    include_once '../db.php';

    if(isset($_GET['idCandidat'])){

        $id=$_GET['idCandidat'];

        $REQ="DELETE FROM Candidat WHERE idCandidat=?";
        $stmt=$CONNEXION->prepare($REQ);
        $stmt->execute([$id]);
        header('Location:../Admin/stagiaires.php');
        exit();
    }
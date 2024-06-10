<?php

    include_once "../db.php";

    if(isset($_GET['idDemande'])){
        $id=$_GET['idDemande'];

        $REQUETE="DELETE FROM Demande WHERE idDemande=?";
        $stmt=$CONNEXION->prepare($REQUETE);
        $stmt->execute(array($id));
        header('Location:candidatures.php');
        exit();
    }
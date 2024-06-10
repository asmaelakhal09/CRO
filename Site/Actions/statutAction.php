<?php
    include_once "../db.php";
    session_start();

    // Récupérer les emails des candidats inscrits
    $req = "SELECT emailCandidat FROM Candidat";
    $stmt = $CONNEXION->query($req);
    $stmt->execute();
    $resultat1 = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
    $requete = "SELECT candidat FROM Demande";
    $stm = $CONNEXION->query($requete);
    $stm->execute();
    $resultat2 = $stm->fetchAll(PDO::FETCH_ASSOC);


    // foreach ($resultat1 as $stagiaire) {
    //     $emailStagiaire = $stagiaire['emailCandidat'];
    //     $candidature = in_array($emailStagiaire, array_column($resultat2, 'candidat')) ? '<a href="../candidatures">Voir sa demande</a>' : 'Pas encore de demande';
       
    // }

   
?>

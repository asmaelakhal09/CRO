<?php

include_once "../db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idDemande'])) {
    $demandeId = $_POST['idDemande'];

    try {
        // Mettre à jour la base de données pour marquer la demande comme acceptée
        $REQ = "UPDATE Demande SET etat = 'refuse' WHERE idDemande = ?";
        $stmt = $CONNEXION->prepare($REQ);
        $stmt->execute([$demandeId]);

        // Récupérer l'adresse email du candidat pour lui envoyer la notification
        $REQUETE_EMAIL = "SELECT candidat FROM Demande WHERE idDemande = ?";
        $stt = $CONNEXION->prepare($REQUETE_EMAIL);
        $stt->execute([$demandeId]);
        $row = $stt->fetch(PDO::FETCH_ASSOC);
        $emailCandidat = $row['candidat'];



        $REQUETE = "SELECT * FROM Candidat WHERE emailCandidat = ?";
        $st = $CONNEXION->prepare($REQUETE);
        $st->execute([$emailCandidat]);
        $r = $st->fetch(PDO::FETCH_ASSOC);
        $nom = $r['nomCandidat'];
        $prenom = $r['prenomCandidat'];

        // Envoyer la notification par email au candidat
        $sujet = "Demande de Candidature de stage";
        $message = "
        
                Cher/chère $nom $prenom,

                Nous vous remercions d'avoir postulé pour un stage au sein du Conseil Régional de l'Oriental.
                
                Après examen attentif de votre candidature, nous regrettons de vous informer que nous ne pourrons pas donner suite à votre demande pour le moment. Veuillez noter que cette décision ne reflète pas vos qualifications ou vos compétences, mais plutôt la disponibilité limitée de places de stage.
                
                Nous vous encourageons à continuer à postuler pour d'autres opportunités qui pourraient correspondre davantage à votre profil. Nous vous souhaitons beaucoup de succès dans vos recherches futures.
                
                Merci encore pour l'intérêt que vous avez porté à notre organisation.
                
                Cordialement,
                L'équipe du Conseil Régional de l'Oriental
        
        ";
        $headers = "From: votreadresse@email.com";




        if (mail($emailCandidat, $sujet, $message, $headers)) {
            // La notification par email a été envoyée avec succès
            echo 'success';
        } else {
            // Erreur lors de l'envoi de la notification par email
            echo 'error';
        }
    } catch (PDOException $e) {
        // Erreur de la base de données
        echo 'error';
    }
}
   
    session_start();

    // Récupérer les emails des candidats inscrits
    $req = "SELECT emailCandidat FROM Candidat";
    $stmt = $CONNEXION->query($req);
    $stmt->execute();
    $resultat1 = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
    $requete = "SELECT candidat FROM Demande WHERE etat='refuse'";
    $stm = $CONNEXION->query($requete);
    $stm->execute();
    $resultat2 = $stm->fetchAll(PDO::FETCH_ASSOC);


    // foreach ($resultat1 as $stagiaire) {
    //     $emailStagiaire = $stagiaire['emailCandidat'];
    //     $candidature = in_array($emailStagiaire, array_column($resultat2, 'candidat')) ? '<a href="../candidatures">Voir sa demande</a>' : 'Pas encore de demande';
       
    // }

   
?>


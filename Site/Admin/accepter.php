<?php

include_once "../db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idDemande'])) {
    $demandeId = $_POST['idDemande'];

    try {
        // Mettre à jour la base de données pour marquer la demande comme acceptée
        $REQ = "UPDATE Demande SET etat = 'Acceptée' WHERE idDemande = ?";
        $stmt = $CONNEXION->prepare($REQ);
        $stmt->execute([$demandeId]);

        // Récupérer l'adresse email du candidat pour lui envoyer la notification
        $REQUETE_EMAIL = "SELECT * FROM Demande WHERE idDemande = ?";
        $stt = $CONNEXION->prepare($REQUETE_EMAIL);
        $stt->execute([$demandeId]);
        $row = $stt->fetch(PDO::FETCH_ASSOC);
        $emailCandidat = $row['candidat'];
        $dateDebut = $row['dateDebut'];
        $dateFin = $row['dateFin'];
        $periode = $row['periode'];

        $REQUETE = "SELECT * FROM Candidat WHERE emailCandidat = ?";
        $st = $CONNEXION->prepare($REQUETE);
        $st->execute([$emailCandidat]);
        $r = $st->fetch(PDO::FETCH_ASSOC);
        $nom = $r['nomCandidat'];
        $prenom = $r['prenomCandidat'];

        

        // Envoyer la notification par email au candidat
        $sujet = "Confirmation de votre demande de candidature de stage";
        $message = "
                    Cher/chère $nom $prenom,

                    Nous avons le plaisir de vous informer que votre demande de candidature de stage a été acceptée au sein du Conseil Régional de l'Oriental.
                    
                    Félicitations pour votre sélection !
                    
                    Voici les informations relatives à votre stage :
                    
                    - Date de début de stage :  $dateDebut
                    - Date de fin de stage : $dateFin
                    - Période de stage : $periode
                    
                    Nous sommes convaincus que cette opportunité de stage vous permettra d'acquérir une expérience précieuse et de développer vos compétences professionnelles.
                    
                    N'hésitez pas à nous contacter si vous avez des questions ou besoin de plus d'informations.
                    
                    Cordialement,
                    L'équipe du Conseil Régional de l'Oriental
                    
        ";
        $headers = "From: votreadresse@email.com";

     



        if (mail($emailCandidat, $sujet, $message, $headers)) {
            // La notification par email a été envoyée avec succès
           header('Location:candidatures.php');
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

   
    $requete = "SELECT candidat FROM Demande WHERE etat='Acceptée'";
    $stm = $CONNEXION->query($requete);
    $stm->execute();
    $resultat2 = $stm->fetchAll(PDO::FETCH_ASSOC);


    // foreach ($resultat1 as $stagiaire) {
    //     $emailStagiaire = $stagiaire['emailCandidat'];
    //     $candidature = in_array($emailStagiaire, array_column($resultat2, 'candidat')) ? '<a href="../candidatures">Voir sa demande</a>' : 'Pas encore de demande';
       
    // }

   
?>


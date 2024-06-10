<?php
include_once "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accepter-btn'])) {
        $demandeId = $_POST['demandeId'];

        // Traitez l'action d'accepter la demande ici

        // Envoie de la notification au candidat
        $candidatEmail = getCandidatEmailById($demandeId); // Remplacez getCandidatEmailById par votre logique pour obtenir l'e-mail du candidat
        $notificationMessage = "Votre demande de stage a été acceptée."; // Message de notification
        sendNotification($candidatEmail, $notificationMessage); // Remplacez sendNotification par votre logique pour envoyer la notification
    }
}
?>

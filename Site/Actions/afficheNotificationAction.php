<?php
    include_once 'db.php';
    session_start();

   
    include_once 'Actions/connexionCandidatAction.php';
    if (isset($_SESSION['email'])) {
        $idCandidat = $_SESSION['email'];
        
        $REQ = "SELECT * FROM notification WHERE candidat=?";
        $stmt = $CONNEXION->prepare($REQ);
        $stmt->execute([$idCandidat]);
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        
        header('Location: connexion.php');
        exit();
    }
?>

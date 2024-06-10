<?php
    include_once "../db.php";
    // session_start();

    $REQ = "SELECT idAdministrateur FROM Administrateur WHERE emailAdmin=?";
    $stm = $CONNEXION->prepare($REQ);
    $stm->execute([$_SESSION['email']]);
    $idAdmin = $stm->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['candidat']) && isset($_POST['message'])){
        $idCandidat = $_POST['candidat'];
        $message = $_POST['message'];
        $dateNotification = date('Y-m-d H:i:s');

        $R = "INSERT INTO Notification (message, dateNotification, Administrateur_idAdministrateur,candidat) VALUES (?, ?, ?, ?)";
        $stt = $CONNEXION->prepare($R);
        $stt->execute([$message, $dateNotification, $idAdmin['idAdministrateur'], $idCandidat]);



        if($R){
            header('Location:confirmNotifier.php');
        }else{
            echo 'EChec';
        }
    }
?>

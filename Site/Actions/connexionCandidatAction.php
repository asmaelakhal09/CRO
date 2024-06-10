<?php

include_once "db.php";
// include_once "demandeAction.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $REQ1 = "SELECT * FROM Candidat WHERE emailCandidat=?";
        $stmt1 = $CONNEXION->prepare($REQ1);
        $stmt1->execute([$email]);
        $result1 = $stmt1->fetch(PDO::FETCH_ASSOC);

        $REQ2 = "SELECT * FROM Candidat WHERE passwordCandidat=?";
        $stmt2 = $CONNEXION->prepare($REQ2);
        $stmt2->execute([$password]);
        $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);

        if ($result1 && $result2) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['idCandidat'] = $result1['idCandidat'];

            $REQ3 = "SELECT * FROM demande WHERE candidat=?";
            $stmt3 = $CONNEXION->prepare($REQ3);
            $stmt3->execute([$email]);
            $result3 = $stmt3->fetch(PDO::FETCH_ASSOC);

            if ($result3) {
                header('Location: compte2.php');
                exit(); // Add exit() to prevent further code execution
            } else {
                header('Location: compte.php');
                exit(); // Add exit() to prevent further code execution
            }
        } else {
            $echec = "Données incorrectes !";
        }
    } else {
        $vide = "Tous les champs sont obligatoires !";
    }
}

?>

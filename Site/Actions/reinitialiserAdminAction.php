<?php
include_once "db.php";

// Fonction pour vérifier si l'e-mail existe dans la table "Candidat"
function emailExists($email) {
    global $CONNEXION;
    $sql = "SELECT COUNT(*) FROM Administrateur WHERE emailAdmin = ?";
    $stmt = $CONNEXION->prepare($sql);
    $stmt->execute([$email]);
    $count = $stmt->fetchColumn();
    return $count > 0;
}

// Fonction pour générer un mot de passe aléatoire
function generateRandomPassword($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+:/<>;.';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }

    return $password;
}

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    if (emailExists($email)) {
        $newPassword = generateRandomPassword();
        // $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Mettre à jour le mot de passe dans la base de données
        $sql = "UPDATE Administrateur SET passwordAdmin = ? WHERE emailAdmin = ?";
        $stmt = $CONNEXION->prepare($sql);
        $stmt->execute([$newPassword, $email]);

        // Envoyer l'e-mail contenant le nouveau mot de passe
        $subject = "Réinitialisation de mot de passe";
        $message = "Bonjour Administrateur $email Votre nouveau mot de passe est  : $newPassword";
        $headers = "From: CRO@ConseilRegional.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "
            <div class='alert alert-success' role='alert'>
                 Un e-mail contenant le nouveau mot de passe a été envoyé à l'adresse : $email
            </div>
            ";
        } else {
            echo "
           
            <div class='alert alert-danger' role='alert'>
                 Une erreur s'est produite lors de l'envoi de l'e-mail.
            </div>
            ";
        }
    } else {
        echo "

        <div class='alert m-3 alert-danger' role='alert'>
             Désolé L'e-mail n'existe pas veuillez entrer un votre email correcte !
        </div>
       
        ";
    }
}
?>

<?php
include_once "db.php";

// Fonction pour vérifier si l'e-mail existe dans la table "Candidat"
function emailExists($email) {
    global $CONNEXION;
    $sql = "SELECT COUNT(*) FROM Candidat WHERE emailCandidat = ?";
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
        $sql = "UPDATE Candidat SET passwordCandidat = ? WHERE emailCandidat = ?";
        $stmt = $CONNEXION->prepare($sql);
        $stmt->execute([$newPassword, $email]);

        // Envoyer l'e-mail contenant le nouveau mot de passe
        $subject = "Réinitialisation de mot de passe";
        $message = "
                     Cher/chère $email,

                    Vous avez demandé la réinitialisation de votre mot de passe sur notre plateforme.

                    Voici votre nouveau mot de passe temporaire : $newPassword

                    Si vous n'avez pas demandé la réinitialisation de votre mot de passe, veuillez nous contacter immédiatement pour des mesures de sécurité supplémentaires.

                    Cordialement,

                    L'équipe du Conseil Regional de l'Oriental
        ";
        $headers = "From: CRO@ConseilRegional.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "
            <div class='col-md-12'>
            <div class='alert alert-success' role='alert'>
                  Un e-mail contenant le nouveau mot de passe a été envoyé à l'adresse : $email
            </div>
          </div>
            ";
        } else {
            echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
        }
    } else {
        echo "
        <div class='col-md-12'>
        <div class='alert alert-danger' role='alert'>
              L'e-mail n'existe pas Veuillez bien entrer votre email correcte !.
        </div>
        </div>
        ";
    }
}
?>

<?php
include_once 'db.php';
session_start();

if (isset($_FILES['cv']) && isset($_FILES['demande']) && isset($_FILES['assurance']) && isset($_FILES['conventiondeStage']) && isset($_POST['offreStage']) && isset($_FILES['copieCin']) && isset($_POST['mention']) && isset($_POST['debut']) && isset($_POST['fin'])) {

    $cv = $_FILES['cv'];
    $demande = $_FILES['demande'];
    $assurance = $_FILES['assurance'];
    $conventiondeStage = $_FILES['conventiondeStage'];
    $offreStage = $_POST['offreStage'];
    $copieCin = $_FILES['copieCin'];
    $email = $_SESSION['email'];
    $dateDemande = date('Y-m-d H:i:s');
    $mention = $_POST['mention'];
    $dateDebut = $_POST['debut'];
    $dateFin = $_POST['fin'];

    // Taille maximale
    $TailleMax = 2032897;

    $typecv = pathinfo($cv['name'], PATHINFO_EXTENSION);
    $typedemande = pathinfo($demande['name'], PATHINFO_EXTENSION);
    $typessurance = pathinfo($assurance['name'], PATHINFO_EXTENSION);
    $typeconvetiondeStage = pathinfo($conventiondeStage['name'], PATHINFO_EXTENSION);
    $copieCin = pathinfo($copieCin['name'], PATHINFO_EXTENSION);

    if ($typecv !== "pdf" && $typedemande !== "pdf" && $typessurance !== "pdf" && $typeconventiondeStage !== "pdf" && $copieCin !== "pdf" ) {
        $notype = "Seuls les fichiers PDF sont autorisés";
    } elseif ($cv['size'] > $TailleMax || $demande['size'] > $TailleMax || $conventiondeStage['size'] > $TailleMax || $copieCin['size'] > $TailleMax || $assurance['size'] > $TailleMax) {
        $depasse = "La taille des fichiers dépasse la taille maximale";
    } else {
        $dossier = "C:/wamp64/www/CRO/Site/Fichiers/" . $email;
        if (!file_exists($dossier)) {
            mkdir($dossier, 0777, true);
        }

        $cvPath = $dossier . "/" . $email . "_CV.pdf";
        $demandePath = $dossier . "/" . $email . "_demande.pdf";
        $assurancePath = $dossier . "/" . $email. "_assurance.pdf";
        $conventiondeStagePath = $dossier . "/" . $email . "_conventiondeStage.pdf";
        $copieCinPath = $dossier . "/" . $email . "_copieCin.pdf";

        move_uploaded_file($cv['tmp_name'], $cvPath);
        move_uploaded_file($demande['tmp_name'], $demandePath);
        move_uploaded_file($assurance['tmp_name'], $assurancePath);
        move_uploaded_file($conventiondeStage['tmp_name'], $conventiondeStagePath);
        move_uploaded_file($copieCin['tmp_name'], $copieCinPath);

        $RE = "INSERT INTO demande(cv, demandeStage, assurance, conventiondeStage, offreStage, copieCin, candidat, dateDemande, mention, dateDebut, dateFin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $CONNEXION->prepare($RE);
        $stmt->execute(array(
            $cvPath,
            $demandePath,
            $assurancePath,
            $conventiondeStagePath,
            $offreStage,
            $copieCin,
            $email,
            $dateDemande,
            $mention,
            $dateDebut,
            $dateFin
        ));


        if($RE){
            header('Location:compte2.php');
            exit();
        }
    }

}
?>

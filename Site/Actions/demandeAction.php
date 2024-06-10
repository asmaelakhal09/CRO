<?php
include_once 'db.php';
session_start();

<<<<<<< HEAD
if (isset($_FILES['cv']) && isset($_FILES['demande']) && isset($_FILES['assurance']) && isset($_FILES['conventiondeStage']) && isset($_POST['offreStage']) && isset($_FILES['copieCin']) && isset($_POST['mention']) && isset($_POST['debut']) && isset($_POST['fin'])) {
=======
if (isset($_FILES['cv']) && isset($_FILES['demande']) && isset($_FILES['assurance']) && isset($_POST['periode']) && isset($_POST['debut']) && isset($_POST['fin'])) {
>>>>>>> origin/master

    $cv = $_FILES['cv'];
    $demande = $_FILES['demande'];
    $assurance = $_FILES['assurance'];
<<<<<<< HEAD
    $conventiondeStage = $_FILES['conventiondeStage'];
    $offreStage = $_POST['offreStage'];
    $copieCin = $_FILES['copieCin'];
    $email = $_SESSION['email'];
    $dateDemande = date('Y-m-d H:i:s');
    $mention = $_POST['mention'];
=======
    $email = $_SESSION['email'];
    $dateDemande = date('Y-m-d H:i:s');
    $periode = $_POST['periode'];
>>>>>>> origin/master
    $dateDebut = $_POST['debut'];
    $dateFin = $_POST['fin'];

    // Taille maximale
    $TailleMax = 2032897;

    $typecv = pathinfo($cv['name'], PATHINFO_EXTENSION);
    $typedemande = pathinfo($demande['name'], PATHINFO_EXTENSION);
    $typessurance = pathinfo($assurance['name'], PATHINFO_EXTENSION);
<<<<<<< HEAD
    $typeconvetiondeStage = pathinfo($conventiondeStage['name'], PATHINFO_EXTENSION);
    $copieCin = pathinfo($copieCin['name'], PATHINFO_EXTENSION);

    if ($typecv !== "pdf" && $typedemande !== "pdf" && $typessurance !== "pdf" && $typeconventiondeStage !== "pdf" && $copieCin !== "pdf" ) {
        $notype = "Seuls les fichiers PDF sont autorisés";
    } elseif ($cv['size'] > $TailleMax || $demande['size'] > $TailleMax || $conventiondeStage['size'] > $TailleMax || $copieCin['size'] > $TailleMax || $assurance['size'] > $TailleMax) {
=======

    if ($typecv !== "pdf" && $typedemande !== "pdf" && $typessurance !== "pdf") {
        $notype = "Seuls les fichiers PDF sont autorisés";
    } elseif ($cv['size'] > $TailleMax || $demande['size'] > $TailleMax  || $assurance['size'] > $TailleMax) {
>>>>>>> origin/master
        $depasse = "La taille des fichiers dépasse la taille maximale";
    } else {
        $dossier = "C:/wamp64/www/CRO/Site/Fichiers/" . $email;
        if (!file_exists($dossier)) {
            mkdir($dossier, 0777, true);
        }

        $cvPath = $dossier . "/" . $email . "_CV.pdf";
        $demandePath = $dossier . "/" . $email . "_demande.pdf";
        $assurancePath = $dossier . "/" . $email. "_assurance.pdf";
<<<<<<< HEAD
        $conventiondeStagePath = $dossier . "/" . $email . "_conventiondeStage.pdf";
        $copieCinPath = $dossier . "/" . $email . "_copieCin.pdf";
=======
>>>>>>> origin/master

        move_uploaded_file($cv['tmp_name'], $cvPath);
        move_uploaded_file($demande['tmp_name'], $demandePath);
        move_uploaded_file($assurance['tmp_name'], $assurancePath);
<<<<<<< HEAD
        move_uploaded_file($conventiondeStage['tmp_name'], $conventiondeStagePath);
        move_uploaded_file($copieCin['tmp_name'], $copieCinPath);

        $RE = "INSERT INTO demande(cv, demandeStage, assurance, conventiondeStage, offreStage, copieCin, candidat, dateDemande, mention, dateDebut, dateFin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
=======

        $RE = "INSERT INTO demande(cv, assurance, demandeStage, candidat,dateDemande,periode,dateDebut,dateFin) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
>>>>>>> origin/master
        $stmt = $CONNEXION->prepare($RE);
        $stmt->execute(array(
            $cvPath,
            $demandePath,
            $assurancePath,
<<<<<<< HEAD
            $conventiondeStagePath,
            $offreStage,
            $copieCin,
            $email,
            $dateDemande,
            $mention,
=======
            $email,
            $dateDemande,
            $periode,
>>>>>>> origin/master
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

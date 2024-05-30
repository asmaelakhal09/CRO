<?php
include_once 'db.php';
session_start();

if (isset($_FILES['cv']) && isset($_FILES['demande']) && isset($_FILES['assurance']) && isset($_POST['periode']) && isset($_POST['debut']) && isset($_POST['fin'])) {

    $cv = $_FILES['cv'];
    $demande = $_FILES['demande'];
    $assurance = $_FILES['assurance'];
    $email = $_SESSION['email'];
    $dateDemande = date('Y-m-d H:i:s');
    $periode = $_POST['periode'];
    $dateDebut = $_POST['debut'];
    $dateFin = $_POST['fin'];

    // Taille maximale
    $TailleMax = 2032897;

    $typecv = pathinfo($cv['name'], PATHINFO_EXTENSION);
    $typedemande = pathinfo($demande['name'], PATHINFO_EXTENSION);
    $typessurance = pathinfo($assurance['name'], PATHINFO_EXTENSION);

    if ($typecv !== "pdf" && $typedemande !== "pdf" && $typessurance !== "pdf") {
        $notype = "Seuls les fichiers PDF sont autorisés";
    } elseif ($cv['size'] > $TailleMax || $demande['size'] > $TailleMax  || $assurance['size'] > $TailleMax) {
        $depasse = "La taille des fichiers dépasse la taille maximale";
    } else {
        $dossier = "C:/wamp64/www/CRO/Site/Fichiers/" . $email;
        if (!file_exists($dossier)) {
            mkdir($dossier, 0777, true);
        }

        $cvPath = $dossier . "/" . $email . "_CV.pdf";
        $demandePath = $dossier . "/" . $email . "_demande.pdf";
        $assurancePath = $dossier . "/" . $email. "_assurance.pdf";

        move_uploaded_file($cv['tmp_name'], $cvPath);
        move_uploaded_file($demande['tmp_name'], $demandePath);
        move_uploaded_file($assurance['tmp_name'], $assurancePath);

        $RE = "INSERT INTO demande(cv, assurance, demandeStage, candidat,dateDemande,periode,dateDebut,dateFin) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $CONNEXION->prepare($RE);
        $stmt->execute(array(
            $cvPath,
            $demandePath,
            $assurancePath,
            $email,
            $dateDemande,
            $periode,
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

<?php
// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Incluez la librairie FPDF
    require('fpdf/fpdf.php');

    // Récupérez les informations du candidat à partir des données POST du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sexe = $_POST['sexe'];
    $dateNaissance = $_POST['dateNaissance'];
    $ecole = $_POST['ecole'];
    $filiere = $_POST['filiere'];
    $niveauEtude = $_POST['niveauEtude'];
    $cin = $_POST['cin'];
    $periode = $_POST['periode'];
    $debut = $_POST['debut'];
    $fin = $_POST['fin'];

    // Créez une classe PDF en étendant FPDF
    class PDF extends FPDF
    {
        // Ajoutez une propriété pour stocker l'état de la case à cocher
        private $checked = false;

        // En-tête
        function Header() {
            // Ajoutez votre logo en haut à gauche de la page
            $this->Image('../Logo CRO_0 (1).png', 10, 3, 20);
            $this->SetFont('Arial', 'B', 16);
            $this->Cell(0, 20, 'Conseil Régional de l\'Oriental', 20, 1, 'R');
            $this->Ln(20); 
    
            // Utilisez la fonction UnderlinedText pour afficher le texte avec un soulignement
            $this->UnderlinedText('Resume de Candidature de stage', 'Arial', 26, 10, 50,'C');
    
            $this->Ln(10); // Espacement
        }

        function UnderlinedText($text, $font = '', $size = 0, $x = 0, $y = 0) {
            $this->SetFont($font, '', $size);
            $this->Text($x, $y, $text);
            $underlineLength = $this->GetStringWidth($text);
            $x2 = $x + $underlineLength;
            $y2 = $y + 0.2; // Ajuster l'épaisseur du soulignement ici
            $this->SetLineWidth(0.1); // Ajuster l'épaisseur de la ligne ici
            $this->Line($x, $y2, $x2, $y2);
        }

        // Pied de page
        function Footer()
        {
            // Positionnez le pied de page à 15 mm du bas
            $this->SetY(-15);
            // Police Arial italique 8
            $this->SetFont('Arial', 'I', 8);
            // Numéro de page
            $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');

            // Dessinez une case à cocher en bas de la page
            $this->SetY(-25);
            $this->SetFont('Arial', 'B', 12);
            // $this->Cell(0, 10, 'X', 1, 0, 'R', $this->checked);
            $this->Cell(0, 10, 'J\'accepte les conditions', 0, 10,'R');
        }

        // Méthode pour changer l'état de la case à cocher
        function SetChecked($value)
        {
            $this->checked = $value;
        }
    }

    // Ajoutez le méta charset pour les caractères de la page
    header('Content-Type: text/html; charset=utf8');

    // Créez une instance de la classe PDF
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

    // Générez le contenu du PDF avec les informations du candidat
    // Utilisez la police en gras pour les informations du candidat
    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Cell(0, 15, 'Nom : ' . $nom, 0, 1 );
    $pdf->Cell(0, 15, 'Prenom : ' . $prenom, 0, 1);
    $pdf->Cell(0, 15, 'Email : ' . $email, 0, 1);
    $pdf->Cell(0, 15, 'Sexe : ' . $sexe, 0, 1);
    $pdf->Cell(0, 15, 'Date de naissance : ' . $dateNaissance, 0, 1);
    $pdf->Cell(0, 15, 'Ecole : ' . $ecole, 0, 1);
    $pdf->Cell(0, 15, 'Filiere : ' . $filiere, 0, 1);
    $pdf->Cell(0, 15, 'Niveau d\'etude : ' . $niveauEtude, 0, 1);
    $pdf->Cell(0, 15, 'CIN : ' . $cin, 0, 1);
    $pdf->Cell(0, 15, 'Periode de stage : ' . $periode, 0, 1);
    $pdf->Cell(0, 15, 'Date de debut de stage : ' . $debut, 0, 1);
    $pdf->Cell(0, 15, 'Date de fin de stage : ' . $fin, 0, 1);

    // Définir l'état de la case à cocher (true pour cocher, false pour décocher)
    $pdf->SetChecked(true); // Par défaut, la case à cocher est cochée, vous pouvez changer la valeur ici

    // Téléchargez le PDF
    $pdf->Output();
    exit;
}
?>

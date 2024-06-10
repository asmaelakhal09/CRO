<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require('fpdf/fpdf.php');
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
<<<<<<< HEAD
    $telephon = $_POST['telephon'];
=======
>>>>>>> origin/master
    $sexe = $_POST['sexe'];
    $dateNaissance = $_POST['dateNaissance'];
    $ecole = $_POST['ecole'];
    $filiere = $_POST['filiere'];
    $niveauEtude = $_POST['niveauEtude'];
    $cin = $_POST['cin'];
    $periode = $_POST['periode'];
    $debut = $_POST['debut'];
    $fin = $_POST['fin'];

  
    class PDF extends FPDF
    {
        
        private $checked = false;

        
        function Header() {
            $this->Image('Logo CRO_0 (1).png', 10, 3, 20);
            $this->SetFont('Arial', 'B', 16);
            $this->Cell(0, 20, 'Conseil Régional de l\'Oriental', 20, 1, 'R');
            $this->Ln(20); 
    
            $this->UnderlinedText('Resume de Candidature de stage', 'Arial', 26, 10, 50,'C');
    
            $this->Ln(10); // Espacement
        }

        function UnderlinedText($text, $font = '', $size = 0, $x = 0, $y = 0) {
            $this->SetFont($font, '', $size);
            $this->Text($x, $y, $text);
            $underlineLength = $this->GetStringWidth($text);
            $x2 = $x + $underlineLength;
            $y2 = $y + 0.2; 
            $this->SetLineWidth(0.1); 
            $this->Line($x, $y2, $x2, $y2);
        }

        
        function Footer()
        {
            $this->SetY(-15);
            // Police Arial italique 8
            $this->SetFont('Arial', 'I', 8);
            // Numéro de page
            $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
            
            $this->SetY(-25);
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(0, 10, 'J\'accepte les conditions', 0, 10,'R');
        }
        
        
    }

    // ajoutez le méta charset pour les caractères de la page
    header('Content-Type: text/html; charset=utf-8');
    
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);
    
    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Cell(0, 15, 'Nom : ' . $nom, 0, 1 );
    $pdf->Cell(0, 15, 'Prenom : ' . $prenom, 0, 1);
    $pdf->Cell(0, 15, 'Email : ' . $email, 0, 1);
<<<<<<< HEAD
    $pdf->Cell(0, 15, 'telephon : ' . $telephon, 0, 1);
=======
>>>>>>> origin/master
    $pdf->Cell(0, 15, 'Sexe : ' . $sexe, 0, 1);
    $pdf->Cell(0, 15, 'Date de naissance : ' . $dateNaissance, 0, 1);
    $pdf->Cell(0, 15, 'Ecole : ' . $ecole, 0, 1);
    $pdf->Cell(0, 15, 'Filiere : ' . $filiere, 0, 1);
    $pdf->Cell(0, 15, 'Niveau d\'etude : ' . $niveauEtude, 0, 1);
    $pdf->Cell(0, 15, 'CIN : ' . $cin, 0, 1);
<<<<<<< HEAD
    $pdf->Cell(0, 15, 'mention de stage : ' . $mention, 0, 1);
=======
    $pdf->Cell(0, 15, 'Periode de stage : ' . $periode, 0, 1);
>>>>>>> origin/master
    $pdf->Cell(0, 15, 'Date de debut de stage : ' . $debut, 0, 1);
    $pdf->Cell(0, 15, 'Date de fin de stage : ' . $fin, 0, 1);
    
    

    // Téléchargez le PDF
    $pdf->Output();
    exit;
}
?>

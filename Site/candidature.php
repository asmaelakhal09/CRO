<?php
// include_once "Actions/securityAction.php";
include_once "db.php";
session_start();

$REQ = "SELECT * FROM demande WHERE candidat=?";
$stmt = $CONNEXION->prepare($REQ);
$stmt->execute([$_SESSION['email']]);
$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $R = "SELECT COUNT(*) AS nombreDemande FROM demande WHERE candidat=?";
// $s = $CONNEXION->prepare($R);
// $s->execute([$_SESSION['email']]);
// $row = $s->fetchAll(PDO::FETCH_ASSOC);
// $nombreDemande=$row['nombreDemande'];

// ...

// Supposons que 'date_depot' est la colonne dans la base de données qui stocke la date de soumission
$RE = "SELECT *, TIMESTAMPDIFF(HOUR, dateDemande, NOW()) AS hours_passed FROM demande WHERE candidat=?";
$stm = $CONNEXION->prepare($RE);
$stm->execute([$_SESSION['email']]);
$result = $stm->fetchAll(PDO::FETCH_ASSOC);

$REQUETE="SELECT * FROM candidat WHERE emailCandidat=?";
$st=$CONNEXION->prepare($REQUETE);
$st->execute(array($_SESSION['email']));
$res=$st->fetchAll(PDO::FETCH_ASSOC);

$REQUET = "SELECT etat AS etatDemande FROM demande WHERE candidat=?";
$stt = $CONNEXION->prepare($REQUET);
$stt->execute(array($_SESSION['email']));
$etat = $stt->fetchColumn(); // Utilisez fetchColumn() pour obtenir directement la valeur de la colonne 'etat'

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Candidature stage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <style>
        .progress-step {
          display: flex;
          align-items: center;
        }
    
        .progress-step i {
          font-size: 50px;
          margin-right: 10px;
        }
    
        .progress-step.active i {
          color: green;
        }
    
        .progress-step:not(.active) i {
          color: lightgray;
        }
        .progress
        {
            height: 200px;
        }
        /* .n 
        {
            display: flex;
            flex-direction: row;
        } */
        .b 
        {
            display: flex;
            flex-direction: row;
        }
        .nnn 
        {
            background-color:#ffc106;
        }
        </style>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav  class="navbar navbar-expand-lg nnn navbar-light  sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="../Site/Logo CRO_0 (1).png" alt="" style="width: 60px;"></h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="index.php" class="nav-item nav-link  ">Acceuil</a>
                <a href="candidature.php" class="nav-item nav-link active">Ma candidature</a>
                <a href="notification.php" class="nav-item nav-link  ">Notifications</a>
                <a href="deconnexion.php" class="nav-item nav-link  ">Deconnexion</a>
                <a href="profil.php" class="nav-item nav-link ">
                  
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                </a>
               
                <!-- <a href="contact.php" class="nav-item nav-link">Contact</a> -->
            </div>
        </div>
    </nav><br>


    <!-- section -->

        <section>
            <div class="container ">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    
                    <h2 class="text-center">Votre candidature</h2>
                  
                  
                    <p>Voici vos dossiers de candidature . Vous pouvez le modifier dans un delais de 24h à partir de la date de dépôt. Donc vous êtes invités à bien vérifier vos documents avant le dépôt. :</p> 
                    
                    <?php if($etat=="Acceptée"):?>
                        <div class="alert alert-info" role="alert">
                            Félicitations votre demande a été acceptée Vous pouvez maintenant imprimer votre résumé de candidature
                            </div>
                        <?php endif;?>
                      </div>
                      <div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>CV</th>
                                        <th>Demande de stage</th>
                                        <th>Assurance</th>
                                        <th>Etat de la candidature</th>
                                        <th colspan="3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($resultat as $row):?>
                                <?php foreach($result as $r):?>
                                 <tr data-hours-passed="<?php echo $r['hours_passed']; ?>">
                                        <td><a href="Fichiers/<?php echo $row['candidat'];?>/<?php echo $row['candidat'];?>_CV.pdf"><button class="btn btn-primary">CV</button></a></td>
                                        <td><a href="Fichiers/<?php echo $row['candidat'];?>/<?php echo $row['candidat'];?>_demande.pdf"><button class="btn btn-dark">Voir la demande</button></a></td>
                                        <td><a href="Fichiers/<?php echo $row['candidat'];?>/<?php echo $row['candidat'];?>_assurance.pdf"><button class="btn btn-success">Voir l'assurance</button></a></td>
                                        <td><?php echo $row['etat'];?></td>
                                        <td><a class="btn btn-primary" href="">Modifier</a></td>
                                        <td><a onclick="return confirm('Attention! cette action est irreversible')" class="btn btn-danger" href="supprimer.php">Supprimer</a></td>
                                        <td>
                                            
                                        <?php if($etat=="Acceptée"): ?>
                                        <?php foreach($res as $ligne):;?>
                                        <form action="generate_pdf.php" method="post">
                                            <input type="hidden" name="nom" value="<?php echo $ligne['nomCandidat']; ?>">
                                            <input type="hidden" name="prenom" value="<?php echo $ligne['prenomCandidat']; ?>">
                                            <input type="hidden" name="email" value="<?php echo $ligne['emailCandidat']; ?>">
<<<<<<< HEAD
                                            <input type="hidden" name="telephon" value="<?php echo $ligne['telephon']; ?>">
=======
>>>>>>> origin/master
                                            <input type="hidden" name="sexe" value="<?php echo $ligne['sexeCandidat']; ?>">
                                            <input type="hidden" name="dateNaissance" value="<?php echo $ligne['dateNaissance']; ?>">
                                            <input type="hidden" name="ecole" value="<?php echo $ligne['ecoleCandidat']; ?>">
                                            <input type="hidden" name="filiere" value="<?php echo $ligne['filiereCandidat']; ?>">
                                            <input type="hidden" name="niveauEtude" value="<?php echo $ligne['niveauEtudCandidat']; ?>">
                                            <input type="hidden" name="cin" value="<?php echo $ligne['cinCandidat']; ?>">
                                            <input type="hidden" name="debut" value="<?php echo $row['dateDebut']; ?>">
                                            <input type="hidden" name="fin" value="<?php echo $row['dateFin']; ?>">
                                            <input type="hidden" name="periode" value="<?php echo $row['periode']; ?>">
                                            <button type="submit" class="btn btn-primary">Imprimer</button>
                                        </form>
                                        <?php endforeach; ?>

                                        <?php endif; 
                                       ?>
                                        
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    
                      
        </section>
        <script>


                document.addEventListener('DOMContentLoaded', () => {
                    const vingtQuatreHeuresEnMillisecondes = 24 * 60 * 60 * 1000;

                    // Parcourir chaque ligne du tableau
                    const lignes = document.querySelectorAll('tbody tr');
                    lignes.forEach((ligne) => {
                    const tempsPasse = parseInt(ligne.dataset.hoursPassed);
                    const boutonModifier = ligne.querySelector('.btn.btn-primary');
                    if (boutonModifier && tempsPasse < 24) {
                        boutonModifier.style.display = 'block'; // Afficher le bouton si le délai n'est pas encore écoulé
                        setTimeout(() => {
                        boutonModifier.style.display = 'none'; // Masquer le bouton après 24 heures
                        }, vingtQuatreHeuresEnMillisecondes - tempsPasse);
                    }
                    });
                });
        </script>

        
    <!-- section -->

   


    <!-- JavaScript Libraries -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>
    </html>
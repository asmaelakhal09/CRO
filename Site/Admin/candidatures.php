<?php

    include_once "../Actions/candidatureAction.php";
    include_once "accepter.php";
    include_once "../ACtions/notifierAction.php";
    include_once "securityAction.php";
    // include_once "../Actions/nomAdminAction.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="../jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img src="../Logo CRO_0 (1).png" height="60" alt=""></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">                       
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
<<<<<<< HEAD
                <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>TABLEAU de bord</a>
                    <a href="stagiaires.php" class="nav-item nav-link "><i class="fa fa-th me-2"></i>STAGIAIRES</a>
                    <a href="candidatures.php" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>CANDIDATURES</a>
                    <a href="ajout.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>AJOUTER</a>
=======
                <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Tableau de bord</a>
                    <a href="stagiaires.php" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Stagiaires</a>
                    <a href="candidatures.php" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Candidatures</a>
                    <a href="ajout.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i> Inscrire</a>
>>>>>>> origin/master
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
               
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
         


        

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Documents déposés</h6>
                       
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                   
                                    <th scope="col">#</th>
<<<<<<< HEAD
                                    <th scope="col">Curriculum vitae</th>
                                    <th scope="col">Demande de stage</th>
                                    <th scope="col">Assurance de stage</th>
                                    <th scope="col">Convention de stage</th>
                                    <th scope="col">Numéro d'offre</th>
=======
                                    <th scope="col">CV(PDF)</th>
                                    <th scope="col">Demande de stage(PDF)</th>
                                    <th scope="col">Assurance de stage(PDF)</th>
>>>>>>> origin/master
                                    <th scope="col">ID-candidat</th>
                                    <th scope="col">Accepter</th>
                                    <th scope="col">Refuser</th>
                                    <th scope="col">Notifier</th>
                                   
                                    <th scope="col">Supprimer</th>
                                    <th scope="col">Etat</th>
                                    <th scope="col">Imprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($resultat as $row):;?>
                                <tr>
                                  
                                    <td><?php echo $row['idDemande'];?></td>
<<<<<<< HEAD
                                    <td><a href="../Fichiers/<?php echo $row['candidat'];?>/<?php echo $row['candidat'];?>_CV.pdf"><button class="btn btn-primary">Voir le CV</button></a></td>
                                    <td><a href="../Fichiers/<?php echo $row['candidat'];?>/<?php echo $row['candidat'];?>_demande.pdf"><button class="btn btn-dark">Voir la demande</button></a></td>
                                    <td><a href="../Fichiers/<?php echo $row['candidat'];?>/<?php echo $row['candidat'];?>_assurance.pdf"><button class="btn btn-success">Voir l'assurance</button></a></td>
                                    <td><a href="../Fichiers/<?php echo $row['candidat'];?>/<?php echo $row['candidat'];?>_convention.pdf"><button class="btn btn-success">Voir la convention</button></a></td>
                                    <td><?php echo $row['offreStage'];?></td>
=======
                                    <td><a href="../Fichiers/<?php echo $row['candidat'];?>/<?php echo $row['candidat'];?>_CV.pdf"><button class="btn btn-primary">CV</button></a></td>
                                    <td><a href="../Fichiers/<?php echo $row['candidat'];?>/<?php echo $row['candidat'];?>_demande.pdf"><button class="btn btn-dark">Voir la demande</button></a></td>
                                    <td><a href="../Fichiers/<?php echo $row['candidat'];?>/<?php echo $row['candidat'];?>_assurance.pdf"><button class="btn btn-success">Voir l'assurance</button></a></td>
>>>>>>> origin/master
                                    <td><?php echo $row['candidat'];?></td>
                                    <td>
                                        <form action="accepter.php" method="post">
                                            <input type="hidden" name="idDemande" value="<?php echo $row['idDemande']; ?>">
                                            <button class="btn btn-success" type="submit">Accepter</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="refuser.php" method="post">
                                            <input type="hidden" name="idDemande" value="<?php echo $row['idDemande']; ?>">
                                            <button class="btn btn-warning" type="submit">Refuser</button>
                                        </form>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['idDemande'];?>">Notifier</button>

                                        <div class="modal fade" id="exampleModal<?php echo $row['idDemande']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                                <p>Notifier <?php echo $row['candidat']; ?></p>
                                                                <div class="mb-3">
                                                                    <input type="hidden" name="candidat" id="" value="<?php echo $row['candidat'];?>">
                                                                <label for="message-text" class="col-form-label">Message:</label>
                                                                <textarea class="form-control" name="message" id="message-text"  required></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                   
                                    <td><a onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce candidat? cette action n`\est plus reversible !')" href="supprimerCandidature.php?idDemande=<?php echo $row['idDemande'];?>" class="btn btn-danger">Supprimer</a></td>
                                    <td scope="col">
                                        <?php 
                                                
                                                $emailStagiaire = $row['candidat'];
                                                $candidature = in_array($emailStagiaire, array_column($resultat2, 'candidat')) ? '<p class="text-success">Acceptée</p>' : 'En attente';
                                                echo $candidature;     
                                        ;?>
                                        </td>
                                        <td>
                                            <?php
                                            
                                                $RE="SELECT * FROM Candidat WHERE emailCandidat=?";
                                                $stm=$CONNEXION->prepare($RE);
                                                $stm->execute([$row['candidat']]);
                                                $result=$stm->fetchAll(PDO::FETCH_ASSOC);
                                            
                                            
                                            
                                            foreach($result as $ligne):;
                                            
                                            
                                            
                                            ?>

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
                                        <?php endforeach;?>

                                        </td>
                                   
                                </tr>
                                <?php endforeach;?>
                                   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Footer Start -->
           
        </div>
        <!-- Content End -->

        


       
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
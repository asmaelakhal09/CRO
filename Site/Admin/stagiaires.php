<?php

include_once '../Actions/AfficherStagiairesAction.php';
include_once '../Actions/statutAction.php';
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
                <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>TABLEAU DE BORD</a>
                    <a href="stagiaires.php" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>STAGIAIRES</a>
                    <a href="candidatures.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>CANDIDATURES</a>
                    <a href="ajout.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>AJOUTER</a>
=======
                <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Tableau de bord</a>
                    <a href="stagiaires.php" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Stagiaires</a>
                    <a href="candidatures.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Candidatures</a>
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
<<<<<<< HEAD
                        <h6 class="mb-0">LISTE DE STAGIAIRES INSCRIS :</h6>
=======
                        <h6 class="mb-0">Liste des stagiaires ayant des comptes</h6>
>>>>>>> origin/master
                       
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover table-striped mb-0">
                            <thead>
                                <tr class="text-dark">
                                   
                                    <th scope="col">#</th>
<<<<<<< HEAD
                                    <th scope="col">NON</th>
                                    <th scope="col">PRENOM</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">TELEPHONE</th>
                                    <th scope="col">DATE DE NAISSANCE</th>
                                    <th scope="col">SEXE</th>
                                    <th scope="col">ECOLE</th>
                                    <th scope="col">FILIERE</th>
                                    <th scope="col">NIVEAU</th>
                                    <th scope="col">CIN</th>
                                    <th scope="col">DEMANDE</th>
                                    <th colspan="2" scope="col">ACTIONS</th>
=======
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date de naissance</th>
                                    <th scope="col">Sexe</th>
                                    <th scope="col">Ecole</th>
                                    <th scope="col">Filière</th>
                                    <th scope="col">Niveau</th>
                                    <th scope="col">CIN</th>
                                    <th scope="col">Demande</th>
                                    <th colspan="2" scope="col">Actions</th>
>>>>>>> origin/master
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($resultat as $row):;?>
                                <tr>
                                <td scope="col"><?php echo $row['idCandidat'];?></td>
                                    <td scope="col"><?php echo $row['nomCandidat'];?></td>
                                    <td scope="col"><?php echo $row['prenomCandidat'];?></td>
                                    <td scope="col"><?php echo $row['emailCandidat'];?></td>
<<<<<<< HEAD
                                    <td scope="col"><?php echo $row['telephon'];?></td>
=======
>>>>>>> origin/master
                                    <td scope="col"><?php echo $row['dateNaissance'];?></td>
                                    <td scope="col"><?php echo $row['sexeCandidat'];?></td>
                                    <td scope="col"><?php echo $row['ecoleCandidat'];?></td>
                                    <td scope="col"><?php echo $row['filiereCandidat'];?></td>
                                    <td scope="col"><?php echo $row['niveauEtudCandidat'];?></td>
                                    <td scope="col"><?php echo $row['cinCandidat'];?></td>
                                    <td scope="col">
                                        <?php 
                                                
                                                $emailStagiaire = $row['emailCandidat'];
<<<<<<< HEAD
                                                $candidature = in_array($emailStagiaire, array_column($resultat2, 'candidat')) ? '<a href="candidatures.php">Voir sa demande</a>' : 'Aucune demande';
=======
                                                $candidature = in_array($emailStagiaire, array_column($resultat2, 'candidat')) ? '<a href="candidatures.php">Voir sa demande</a>' : 'Pas encore de demande';
>>>>>>> origin/master
                                                echo $candidature;
                                                   
                                               
                                        ;?>
                                    </td>
                                    <td>
                                        <a href="modifier.php?idCandidat=<?php echo $row['idCandidat'];?>" class="btn btn-primary">Modifier</a>
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Êtes-vous sur de vouloir supprimer ce candidat?')" href="supprimer.php?idCandidat=<?php echo $row['idCandidat'];?>" class="btn btn-danger">Supprimer</a>

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
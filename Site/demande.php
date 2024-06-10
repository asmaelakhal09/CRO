<?php


  include_once 'Actions/demandeAction.php';
  include_once "Actions/securityAction.php";




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
        .btn
        {
            width: 100%;
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
    <nav class="navbar navbar-expand-lg bg-light navbar-primary sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="../Site/Logo CRO_0 (1).png" alt="" style="width: 60px;"></h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
        <a href="index.php" class="nav-item nav-link ">Acceuil</a>
                <a href="profil.php" class="nav-item nav-link">Profil</a>
                <a href="notification.php" class="nav-item nav-link">Notifications</a>
                <a href="candidature.php" class="nav-item nav-link ">Candidature</a>
                <a href="deconnexion.php" class="nav-item nav-link">Deconnexion</a>
            </div>
            </div>
        </div>
    </nav> <br>


    <!-- section -->

        <section>
            <div class="container">
                <div class="row justify-content-center mt-5">
                  <div class="col-md-6">
                    <h2 class="text-center mb-4">Déposez-vos dossiers pour compléter votre demande</h2>
                    <form class="border shadow p-3" action="" method="POST" enctype="multipart/form-data">
<<<<<<< HEAD
                        <div class="form-group">
                        <label for="cv">Curriculum Vitae :</label>
                        <input type="file" class="form-control" id="cv" name="cv" required>
                        </div> <br>
                        <div class="form-group">
                        <label for="demandeStage">Demande de stage :</label>
                        <input type="file" class="form-control" id="demande" name="demande" required>
                        </div> <br>
                        <div class="form-group">
                        <label for="assuranceStage">Assurance de stage :</label>
                        <input type="file" class="form-control" id="assurance" name="assurance" required>
                        </div> <br>
                        <div class="form-group">
                        <label for="conventiondeStage">Convention de stage :</label>
                        <input type="file" class="form-control" id="conventiondeStage" name="conventiondeStage" required>
                        </div> <br>
                         <div class="form-group">
                        <label for="offreStage">L'offre :</label>
                        
                         <input list="browsers" name="offreStage">
                            <datalist id="browsers">
                              <option value="Offre 1:PHP">
                              <option value="Offre 2:JAVA">
                              <option value="Offre 3:FIGMA">
                              <option value="Offre 4:PYTHON">
                              <option value="Offre 5:ANGULAR">
                              <option value="Offre 6:C++">
                            </datalist>
                        
                        <input type="radio" id="ignorer" name="offreStage" value="ignorer">
                        <label for="html">Ingorer</label><br>
                        
                        </div> <br>
                        <div class="form-group">
                        <label for="copieCin">Copie de cin :</label>
                        <input type="file" class="form-control" id="copieCin" name="copieCin" required>
                        </div> <br>
                        <div class="form-group">
                        <label for="mentionStage">Mention de stage :</label>
                        <select class="form-control" name="mention" id="mention">
                            <option value="stage d'observation">Stage d'observation</option>
                            <option value="stage de fin d'année">Stage de fin d'année</option>
                            <option value="stage de fin d'étude">Stage de fin d'étude</option>
                        </select>
                        </div> <br>
                        <div class="form-group">
                        <label for="assuranceStage">Date de début de stage :</label>
                        <input type="date" class="form-control" id="debut" name="debut" required>
                        </div> <br>
                        <div class="form-group">
                        <label for="assuranceStage">Date de fin de stage :</label>
                        <input type="date" class="form-control" id="fin" name="fin" required>
                        </div> <br>
                        <button type="submit" class="btn btn-primary btn-block">Valider</button>
                   </form>
=======
                      <div class="form-group">
                        <label for="cv">CV</label>
                        <input type="file" class="form-control" id="cv" name="cv" required>
                      </div> <br>
                      <div class="form-group">
                        <label for="demandeStage">Demande de stage</label>
                        <input type="file" class="form-control" id="demande" name="demande" required>
                      </div> <br>
                      <div class="form-group">
                        <label for="assuranceStage">Assurance de stage</label>
                        <input type="file" class="form-control" id="assurance" name="assurance" required>
                      </div> <br>
                      <div class="form-group">
                        <label for="assuranceStage">Periode de stage</label>
                        <select class="form-control" name="periode" id="periode">
                            <option value="un mois">un mois</option>
                            <option value="deux mois">deux mois</option>
                            <option value="trois mois">trois mois</option>
                        </select>
                      </div> <br>
                      <div class="form-group">
                        <label for="assuranceStage">Date de debut de stage</label>
                        <input type="date" class="form-control" id="debut" name="debut" required>
                      </div> <br>
                      <div class="form-group">
                        <label for="assuranceStage">Date de fin de stage</label>
                        <input type="date" class="form-control" id="fin" name="fin" required>
                      </div> <br>
                      <button type="submit" class="btn btn-primary btn-block">Valider</button>
                    </form>
>>>>>>> origin/master
                  </div>
                </div>
              </div>
        </section>

        
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
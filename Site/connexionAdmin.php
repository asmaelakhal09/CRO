<?php

  include_once "Actions/connexionAdminAction.php";


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Candidature stage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <style>
        .hero-header
        {
            background-image:url('img/thumb.jpg');
            background-size:cover;
            height:900px;
            
        }
        body
        {
          overflow-y:hidden;
        }
        .demarche 
        {
            background-image:url('img/thumb.jpg');
            background-size:cover;
            background-attachment:fixed;
        }
        .nnn 
        {
           background-color: white;
        }
        .b 
        {
            text-align:center;
           
        }
        .f 
        {
          position: relative;
          top: -40px;
        }
        .s 
        {
          font-weight:bolder;
          font-size:23px;
          text-align:center;
        }
        .btn 
        {
          width:100%;
        }
    </style>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-warning" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg nnn navbar-light  sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="../Site/Logo CRO_0 (1).png" alt="" style="width: 60px;"></h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="index.php" class="nav-item nav-link ">Acceuil</a>
                <a href="about.php" class="nav-item nav-link ">Apropos</a>
                <a href="inscription.php" class="nav-item nav-link">S'inscrire</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Connexion</a>
                    <div class="dropdown-menu shadow-sm m-0">
                        <a href="connexion.php" class="dropdown-item">Candidat</a>
                        <a href="connexionAdmin.php" class="dropdown-item active">Adminisrtateur</a>
                    </div>
                </div>
                <!-- <a href="contact.php" class="nav-item nav-link">Contact</a> -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container p-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <h3 id="welcomeText" class="display-4 mb-3 animated slideInDown b text-center text-light"></h3>
                    <p class="text-light s">Espace reservé uniquement aux Administrateurs</p>


                    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h2 class="text-center text-white">Espace Administrateur</h2>
            <form class="border p-3 shadow bg-light" action="" method="POST">
                <div>
                  <?php

                      if(isset($nonvalide)){
                        echo "<p class='text-danger'>$nonvalide</p>";
                      }elseif(isset($vide)){
                        echo "<p lass='text-danger'>$vide</p>";
                      }

                    ?>
                </div>
                <div class="form-group">
              <label for="email">Email :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                </div>
                <input class="border-2 shadow bg-light border form-control" type="email" name="email" id="email" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label for="password">Mot de passe :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                </div>
                <input class="border-2 shadow bg-light border form-control" type="password" name="password" id="password" class="form-control" required>
              </div>
            </div> <br>
              <div class="text-center">
                <button type="submit" class="btn btn-warning">Se connecter</button>
              </div>
              <a style="color:blue;" href="reinitialiserPasswoedAdmin.php">Mot de passe oublié?</a>
            </form>
          </div>
          </div>
          </div>
    <!-- debut formulaure -->
    </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- debut formulaure -->

   

 


    <!-- JavaScript Libraries -->
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
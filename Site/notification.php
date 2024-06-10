<?php

  include_once 'Actions/afficheNotificationAction.php';
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
        body
        {
          background-color: !important;
          color:white;
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
        .x
        {
            font-style:italic;
            font-weight:bolder;
        }
        .hero-header
        {
            background-image:url('img/thumb.jpg');
            background-size:cover;
            height: 300px;
        }
        .demarche 
        {
            background-image:url('img/thumb.jpg');
            background-size:cover;
            background-attachment:fixed;
        }
        .nnn 
        {
           background-color:#ffc106;
        }
        .b 
        {
            text-align:center;
           
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
                <a href="candidature.php" class="nav-item nav-link ">Ma candidature</a>
                <a href="notification.php" class="nav-item nav-link active ">Notifications</a>
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
    </nav>
    <!-- Navbar End -->
<br>


    <!-- section -->
    <h2 class="text-center">Notifications</h2>
    <p class="text-center">Dans cette section vous recevrez des notifications concernant vos dossiers de candidature</p>

       
    <div class="notifications">
      <?php foreach($resultat as $row):;?>
        <div class="alert shadow alert-success m-5" role="alert">
          <strong>Message de l'Administration:</strong> <br> <br>
          
          <?php echo $row['message'];?> <br> <br>
          <small> Envoyé le <?php echo $row['dateNotification'];?></small>
          
        </div>
        <?php endforeach;?>
       
      </div>

      
                                          
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
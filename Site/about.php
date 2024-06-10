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
           background-color: white;
        }
        .b 
        {
            text-align:center;
           
        }
         .n
        {
            background-color: #ffc106 !important;
            height: 200px;
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
    <nav id="bar" class="navbar  navbar-expand-lg nnn navbar-light  sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="../Site/Logo CRO_0 (1).png" alt="" style="width: 60px;"></h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="index.php" class="nav-item nav-link ">Acceuil</a>
                <a href="about.php" class="nav-item nav-link active">Apropos</a>
                <a href="offre.php" class="nav-item nav-link xx">Offres</a>
                <a href="inscription.php" class="nav-item nav-link">S'inscrire</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Connexion</a>
                    <div class="dropdown-menu shadow-sm m-0">
                        <a href="connexion.php" class="dropdown-item">Candidat</a>
                        <a href="connexionAdmin.php" class="dropdown-item">Adminisrtateur</a>
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
    </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


   <!-- About Start -->
   <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="Logo CRO_0 (1).png" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">A propos de nous </h1>
                        <p class="text-primary fs-5 mb-4"></p>
                        <p>Le service de gestion des stagiaires du Conseil régional de l'Oriental vise à faciliter la mise en relation entre les entreprises locales et les étudiants en quête d'opportunités de stage enrichissantes. Notre plateforme offre une interface conviviale et intuitive, permettant aux étudiants de trouver des stages correspondant à leurs intérêts et compétences, tout en offrant aux entreprises un accès simplifié à un vivier de talents.</p>

            
                        <p class="mb-4">    En tant que partenaires du Conseil régional de l'Oriental, nous partageons une vision commune : favoriser le développement de la région en offrant aux étudiants des opportunités d'apprentissage professionnel, et en soutenant les entreprises locales dans leur recherche de stagiaires motivés et qualifiés.</p></p>
                        <!-- <a class="btn btn-primary py-3 px-4" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script>



const text = "Apropos de  nous";
const welcomeText = document.getElementById("welcomeText");
let index = 0;

function writeText() {
    welcomeText.innerHTML += text.charAt(index);
    index++;
    if (index < text.length) {
        setTimeout(writeText, 60);
    }
}

writeText();




var header=document.getElementById('bar');
    window.addEventListener('scroll',()=>{
        if(window.scrollY >350){
           header.style.backgroundColor="#ffc106";
           header.style.color="#ffff";
           
        }else{
            header.style.backgroundColor="#ffff";
        }
    })

    </script>
  
    <!-- Footer Start -->
    <section id="map" class="pb-5 mt-10">
        <div class="container-fluid">
          <div class="row n">
            <div class="col-md-6 col-sm-6 p-0 m-0 color-div">
              <div class="contact-region-principal">
                <img class="contact-logo"  src="https://conseilregionoriental.ma/themes/custom/cr_theme/assets/images/logoContact/Fichier 17.png" alt="">
               
      
                 <p class="text-dark">Région de l’Oriental</p>
              </div>
              <ul class="padding-ltr list-style-none">
                <li  class="contact-adress">
                  <img class="contact-img-right" src="https://conseilregionoriental.ma/themes/custom/cr_theme/assets/images/logoContact/Fichier 18.png" alt="">
                  <p class="adresse-region text-dark">Boulevard Son Altesse Royale Le Prince Héritier Moulay El Hassan - Oujda
                </p>
                </li>
                <li  class="contact-adress">
                  <img class="contact-img-right" src="https://conseilregionoriental.ma/themes/custom/cr_theme/assets/images/logoContact/Fichier 19.png" alt="">
                  <p class="adresse-region text-dark">00212536524300</p>
                </li>
                <!-- <li  class="contact-adress">
                  <img class="contact-img-right" src="https://conseilregionoriental.ma/themes/custom/cr_theme/assets/images/logoContact/Fichier 20.png" alt="">
                  <p class="adresse-region"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cfff3f2e8fdffe8dcfff3f2eff9f5f0eef9fbf5f3f2f3eef5f9f2e8fdf0b2f1fd">[email&#160;protected]</a></p>
                </li> -->
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 p-0 m-0">
              
        <div>
                        <div>  <iframe width="100%" height="198px" title="" frameborder="0" style="border:0" src="https://maps.google.com/maps?hl=en&amp;q=conseil+regional+de+l%27oriental&amp;t=m&amp;z=17&amp;output=embed"></iframe>
      </div>
                    </div>
          
            </div>
          </div>
          
        </div>
      </section>
      <p class="text-center text-dark">© 2023 Conseil Régional de l'Oriental. Tous droits réservés.</p>
      
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
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
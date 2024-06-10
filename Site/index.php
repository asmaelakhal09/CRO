<!DOCTYPE html>
<html lang="en">

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
    <script src="jquery.min.js"></script>
    


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<style>
        .hero-header
        {
            background-image:url('img/thumb.jpg');
            background-size:cover;
            height: 700px;
        }
        .demarche 
        {
            background-image:url('img/thumb.jpg');
            background-size:cover;
            background-attachment:fixed;
        }
        .nnn 
        {
           background-color:white;
        }
        #id1{
                color: white;
        }
        #map 
        {
            background-color: #ffffff;
        }
        .n
        {
            background-color: #ffc109 !important;
            height: 200px;
        }
        *{
    padding: 0;
    margin: 0;
}


.nav {
    width: 95%;
    height: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: auto;
    margin-top: 5px;
}


.nav ul {
    display: flex;
    justify-content: space-around;
    align-items: center;
    list-style: none;
    flex-grow: 0.3;
    height: 57px ;
}
.nav .state {
    height: 57px ;

}
.nav .state button {
    width: 120px;
    height: 35px;
    font-weight: bold;
    margin: 0px 7px;
    border: 0px;
    border-radius: 8px;
}

.nav .state button:nth-child(1) {
  
    background-color: white;
    color: black;
    border: 2px solid gray;
}
.nav .state button:nth-child(2) {
  
    background-color: black;
    color: white;
}
.nav  .logo {
    padding-bottom:10px
}
.nav  .logo img {
    width: 53px;
    height: 64px;
    position:reltive;
    bottom:5px
}


.nav ul li span {
    color:black ;
    font-weight:bold ;
    width:100%;
    height:100%
}

.nav ul li {
    flex-grow: 0.5;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 4px;
    width: 70px;
    height: 100%;
    border-radius: 8px;   
}


.nav ul li:hover {
    background-color: rgb(240, 240, 240) ;
    color: black;
    cursor: pointer;
}


.nav .state  button:nth-child(1):hover{
    background-color: rgb(242, 238, 238);
    color: black;
}

.para {
    width: 200px;
    margin: auto;
    background-color: rgb(218, 132, 132);
}
ul li span a {
    color: black !important;
    width:100%;
    height:100%;
  display:flex;
  justify-content:center;
  align-items:center;
  text-decoration:none !important;
  
} 
    </style>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="nav">
    <div class="logo"><img src="./Logo CRO_0 (1).png" alt=""></div>
    <ul>
        <li class="bg-secondary"><span><a href="theOffers.php">Accueil</a></span></li>
        <li><span> <a href="theOffers.php">a propos</a></span></li>
        <li><span><a href="theOffers.php">offers</a></span></li>
        <li><span><a href="theOffers.php">contacts</a></span></li>

    </ul>

    <div class="state">
        <button>s'inscrire</button>
        <button>se connecter</button>
    </div>
</div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container p-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h3 id="welcomeText" class="display-4 mb-3 animated slideInDown b text-light"></h3>

                    <p class="animated slideInDown text-white b">Vous êtes étudiant et vous cherchez une opportunité de stage pour acquérir une expérience professionnelle précieuse ? Que vous soyez en première année d'études ou en fin de cursus, un stage peut vous offrir une expérience pratique inestimable dans votre domaine d'études.</p>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/removebg-preview.png" height="200" alt="">
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
                    <img class="img-fluid" src="../Site/Logo CRO_0 (1).png" alt="">
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
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl demarche bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 text-white">Démarche</h1>
                <p class="text-white fs-5 mb-5">Déposer votre dossier de stage sur notre plateforme est simple et rapide ! Suivez les étapes ci-dessous pour soumettre votre candidature :</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <!-- <img class="img-fluid mb-4" src="img/icon-7.png" alt=""> -->
                        <h5 class="mb-3">1<sup>ère</sup> étape</h5>
                        <p>Créez un compte : Commencez par créer un compte sur notre plateforme en fournissant vos informations personnelles telles que votre nom, votre adresse e-mail et votre numéro de téléphone. Vous recevrez ensuite un e-mail de confirmation pour activer votre compte.</p>
                        <!-- <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <!-- <img class="img-fluid mb-4" src="img/icon-3.png" alt=""> -->
                        <h5 class="mb-3">2<sup>ème</sup> étape</h5>
                        <p>Soumettez votre candidature : Une fois que vous avez rempli tous les champs requis et attaché les documents demandés, cliquez sur le bouton "Soumettre" pour envoyer votre candidature. Assurez-vous de vérifier attentivement tous les détails avant de finaliser l'envoi</p>
                        <!-- <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <!-- <img class="img-fluid mb-4" src="img/icon-9.png" alt=""> -->
                        <h5 class="mb-3">3<sup>ème</sup> étape</h5>
                        <p>Suivi de votre candidature : Après avoir soumis votre dossier, vous recevrez une confirmation par e-mail. Le conseil de la region de l'oriental aura ensuite la possibilité de consulter votre candidature et de vous contacter directement pour vous informer de la suite du processus de sélection.</p>
                        <!-- <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a> -->
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item bg-white p-5">
                            <!-- <img class="img-fluid mb-4" src="img/icon-5.png" alt=""> -->
                            <h5 class="mb-3">4<sup>ème</sup> étape</h5>
                            <p>Notifications concernant l'état de votre demande : Vous recevrez des notifications par e-mail ou sur votre compte pour vous informer de l'état de votre demande de stage. Cela inclut les mises à jour sur le traitement de votre candidature ou toute autre information importante liée à votre demande.</p>
                            <!-- <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a> -->
                    </div>
                 </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="service-item bg-white p-5">
                            <!-- <img class="img-fluid mb-4" src="img/icon-2.png" alt=""> -->
                            <h5 class="mb-3">5<sup>ème</sup> étape</h5>
                            <p>Consultation de votre profil : Vous aurez la possibilité de consulter votre profil sur notre plateforme. Cela vous permettra de vérifier les informations que vous avez fournies, de mettre à jour votre CV, et de suivre le statut de vos candidatures précédentes.</p>
                            <!-- <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>



    <script>



const text = "Bienvenue sur la plateforme de dépôt de stage du conseil régional de l'Oriental";
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
    <!-- Service End -->

    <!-- Footer Start -->
    <section id="map" class="pb-5 mt-10">
        <div class="container-fluid">
          <div class="row n">
            <div class="col-md-6 col-sm-6 p-0 m-0 color-div">
              <div class="contact-region-principal">
                <img class="contact-logo"  src="https://conseilregionoriental.ma/themes/custom/cr_theme/assets/images/logoContact/Fichier 17.png" alt="">
               
      
                 <p class="text-dark"> Région de l’Oriental</p>
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
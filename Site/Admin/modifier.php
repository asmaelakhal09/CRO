<?php

include_once "../db.php";
// include_once "securityAction.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $dateNaissance=$_POST['dateNaissance'];
    $sexe=$_POST['sexe'];
    $ecole=$_POST['ecole'];
    $filiere=$_POST['filiere'];
    $niveau=$_POST['niveauEtude'];
    $cin=$_POST['cin'];


    $REQ="UPDATE Candidat SET 
            nomCandidat=?,
            prenomCandidat=?,
            emailCandidat=?,
            dateNaissance=?,
            sexeCandidat=?,
            ecoleCandidat=?,
            filiereCandidat=?,
            niveauEtudCandidat=?,
            cinCandidat=? WHERE idCandidat=?";
    $stmt=$CONNEXION->prepare($REQ);
    $stmt->execute([$nom,$prenom,$email,$dateNaissance,$sexe,$ecole,$filiere,$niveau,$cin,$id]);
    // $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);

    if($REQ){
        header('Location:stagiaires.php');
    }
}



    $id=$_GET['idCandidat'];

    $REQUETE="SELECT * FROM Candidat WHERE idCandidat=?";
    $stt=$CONNEXION->prepare($REQUETE);
    $stt->execute(array($id));
    $resul=$stt->fetchAll(PDO::FETCH_ASSOC);



session_start();

$req="SELECT * FROM Administrateur WHERE emailAdmin=?";
$st=$CONNEXION->prepare($req);
$st->execute([$_SESSION['email']]);
//$resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
$resultat=$st->fetchAll(PDO::FETCH_ASSOC);



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <style>
        .v 
        {
            background-color:blue;
            width:100%;
        }
    </style>

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
                        <?php foreach($resultat as $row):;?>
                        <h6 class="mb-0"><?php echo $row['nomAdmin'];?> <?php echo $row['prenomAdmin'];?></h6>
                        <?php endforeach;?>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Tableau de bord</a>
                    <a href="stagiaires.php" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Stagiaires</a>
                    <a href="candidatures.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Candidatures</a>
                    <a href="ajout.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i> Inscrire</a>
                    
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
               
            </nav> <br>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
         


        
                        <h3 class="text-center">Boujour et bienvenu Amin: example@gmail.com</h3>
                       
                        <div>

            <form class="border bg-white p-3 shadow" action="" method="POST">
                <?php foreach($resul as $ligne): ;?>
            <div class="form-group">
                <input class="border-2 bg-light shadow border-primary form-control" type="hidden" name="id" id="id" class="form-control" value="<?php echo $ligne['idCandidat'];?>">
            </div>
              <div class="form-group">
                <label for="nom">Nom :</label>
                <input class="border-2 bg-light shadow border-primary form-control" type="text" name="nom" id="nom" class="form-control"  value="<?php echo $ligne['nomCandidat'];?>">
              </div>
              <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input class="border-2 shadow bg-light border-primary form-control" type="text" name="prenom" id="prenom" class="form-control"  value="<?php echo $ligne['prenomCandidat'];?>">
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input class="border-2  shadowbg-light border-primary form-control" type="email" name="email" id="email" class="form-control"  value="<?php echo $ligne['emailCandidat'];?>" >
              </div>
              <div class="form-group">
                <label for="dateNaissance">Date de naissance :</label>
                <input class="border-2 shadow  bg-light border-primary form-control" type="date" name="dateNaissance" id="dateNaissance" class="form-control"  value="<?php echo $ligne['dateNaissance'];?>" >
              </div>
              <div class="form-group">
                <label for="sexe">Sexe :</label>
                <select name="sexe" id="sexe" class="border-2 shadow bg-light border-primary form-control">
                    <option value="Homme" <?php if ($ligne['sexeCandidat'] === 'Homme') echo 'selected'; ?>>Homme</option>
                    <option value="Femme" <?php if ($ligne['sexeCandidat'] === 'Femme') echo 'selected'; ?>>Femme</option>
                </select>
            </div>
              <div class="form-group">
                <label for="ecole">École :</label>
                <input class="border-2 shadow bg-light border-primary form-control" type="text" name="ecole" id="ecole" class="form-control"  value="<?php echo $ligne['ecoleCandidat'];?>" >
              </div>
              <div class="form-group">
                <label for="filiere">Filière :</label>
                <input class="border-2 shadow  bg-light border-primary form-control" type="text" name="filiere" id="filiere" class="form-control"  value="<?php echo $ligne['filiereCandidat'];?>">
              </div>
              <div class="form-group">
                <label for="niveauEtude">Niveau d'étude :</label>
                <input class="border-2 shadow bg-light border-primary form-control" type="text" name="niveauEtude" id="niveauEtude" class="form-control"  value="<?php echo $ligne['niveauEtudCandidat'];?>">
              </div>
              <div class="form-group">
                <label for="cin">CIN :</label>
                <input class="border-2 shadow bg-light border-primary form-control" type="text" name="cin" id="cin" class="form-control"  value="<?php echo $ligne['cinCandidat'];?>">
              </div> <br>
              <div class="text-center">
                <button type="submit" class="btn v btn-primary">Enregistrer les modifications</button>
              </div>
              <?php endforeach;?>
            </form>
        </div>
           
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
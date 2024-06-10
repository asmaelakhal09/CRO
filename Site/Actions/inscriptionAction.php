<?php
    include_once 'db.php';

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephon']) && isset($_POST['dateNaissance']) && isset($_POST['sexe']) && isset($_POST['ecole']) && isset($_POST['filiere']) && isset($_POST['niveauEtude']) && isset($_POST['cin']) && isset($_POST['password'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephon = $_POST['telephon'];
        $dateNaissance = $_POST['dateNaissance'];
        $sexe = $_POST['sexe'];
        $ecole = $_POST['ecole'];
        $filiere = $_POST['filiere'];
        $niveauEtude = $_POST['niveauEtude'];
        $cin = $_POST['cin'];
        $password = $_POST['password'];
        $dateInscription = date('Y-m-d H:i:s');
        $typeInscription="Candidat";
        


        //INSERTION

        $REQUETE="SELECT COUNT(*) AS count FROM candidat WHERE emailCandidat=?";
        $stt=$CONNEXION->prepare($REQUETE);
        $stt->execute([$email]);
        $result=$stt->fetch(PDO::FETCH_ASSOC);

        if($result['count']>0){
            //     echo "<div class='alert alert-danger' role='alert'>
            //    Ce email a été déja utilisé !
            //   </div>";
            $existe="<div class='alert alert-danger' role='alert'>
                        Cet email a été déja utilisé !
                     </div>
                     ";
        }else{

            $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/';


            if(preg_match($pattern,$password)){
                $REQ="INSERT INTO Candidat(nomCandidat	,prenomCandidat,	emailCandidat, telephon,	dateNaissance,	sexeCandidat,	ecoleCandidat,	filiereCandidat,	niveauEtudCandidat,	cinCandidat	,passwordCandidat,dateInscription,TypeInscription	) VALUES
                (?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $stmt=$CONNEXION->prepare($REQ);
                $stmt->execute(array(
                    $nom,
                    $prenom,
                    $email,
                    $telephon,
                    $dateNaissance,
                    $sexe,
                    $ecole,
                    $filiere,
                    $niveauEtude,
                    $cin,
                    $password,
                    $dateInscription,
                    $typeInscription
                ));
        
                if($REQ){
                   $succes='
                   <div class="row justify-content-center">
                     <div class="col-md-6 p-4">
                       <div class="alert alert-success p-3" role="alert">
                         Félicitations ! Votre inscription a été effectuée avec succès.
                       </div>
                       <!-- <div class="text-center">
                         <a href="connexion.php" class="btn btn-primary">Se connecter</a>
                       </div> -->
                     </div>
                   </div>
                 ';
                    
                }else{
                    header('Location:echecInscription.php');
                }
        
        
        
        
                $subject = "Création de nouveau compte ";
                $message = "
                      
                      Cher/chère $nom $prenom,

                      Nous sommes ravis de vous accueillir sur notre plateforme ! Votre compte a été créé avec succès.
                      
                      Voici vos informations de connexion :
                      
                      - Adresse e-mail : $email
                      - Mot de passe : $password
                      
                      Vous pouvez dès à présent vous connecter à votre compte via ce lien http://localhost/cro/Site/connexion.php en utilisant les informations fournis et commencer à explorer notre plateforme.
                      
                      N'hésitez pas à nous contacter si vous avez des questions ou besoin d'aide. Nous sommes là pour vous accompagner tout au long de votre expérience sur notre site.
                      
                      Bienvenue parmi nous !
                      
                      Cordialement,
                      L'équipe de [Votre plateforme]
                      
                      ";
                      $headers = "From: CRO@ConseilRegional.com";
                
                // mail($email, $subject, $message, $headers); 

            }else{
                $existe="<div class='alert alert-danger' role='alert'>
                            Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial.
                        </div>";
            }
        } 
    }
?>

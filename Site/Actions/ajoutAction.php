<?php
    include_once '../db.php';

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['dateNaissance']) && isset($_POST['sexe']) && isset($_POST['ecole']) && isset($_POST['filiere']) && isset($_POST['niveauEtude']) && isset($_POST['cin'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $dateNaissance = $_POST['dateNaissance'];
        $sexe = $_POST['sexe'];
        $ecole = $_POST['ecole'];
        $filiere = $_POST['filiere'];
        $niveauEtude = $_POST['niveauEtude'];
        $cin = $_POST['cin'];
        $dateInscription = date('Y-m-d H:i:s');
        $typeInscription = "Administrateur";

        function generateRandomPassword($length = 8) {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+:/<>;.';
            $password = '';
        
            for ($i = 0; $i < $length; $i++) {
                $index = mt_rand(0, strlen($characters) - 1);
                $password .= $characters[$index];
            }
        
            return $password;
        }
       $password=generateRandomPassword();
        


        //INSERTION

        $REQUETE="SELECT COUNT(*) AS count FROM candidat WHERE emailCandidat=?";
        $stt=$CONNEXION->prepare($REQUETE);
        $stt->execute([$email]);
        $result=$stt->fetch(PDO::FETCH_ASSOC);

        if($result['count']>0){

            $existe="<div class='alert alert-danger' role='alert'>
                        Cet email a été déja utilisé !
                     </div>
                     ";
             }else{
                $REQ="INSERT INTO Candidat(nomCandidat	,prenomCandidat,	emailCandidat,	dateNaissance,	sexeCandidat,	ecoleCandidat,	filiereCandidat,	niveauEtudCandidat,	cinCandidat	,passwordCandidat,dateInscription,TypeInscription) VALUES
                (?,?,?,?,?,?,?,?,?,?,?,?)";
                $stmt=$CONNEXION->prepare($REQ);
                $stmt->execute(array(
                    $nom,
                    $prenom,
                    $email,
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
                    header('Location:../Admin/confirmAjout.php');
                    
                }else{
                    header('Location:../Admin/echecAjout.php');
                }
        
        
        
        
                $subject = "Creation de noveau compte";
                $message = "Bonjour $prenom $nom Vous avez créer un compte dans la plateforme de depot de stage du Conseil Regional de l'Oriental Votre mot de passe secret est : $password";
                $headers = "From: CRO@ConseilRegional.com";
              
                mail($email, $subject, $message, $headers);
                }
    }
    
?>

<?php

include_once "../db.php";

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id=$_POST['id'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
<<<<<<< HEAD
        $telephon=$_POST['telephon'];
=======
>>>>>>> origin/master
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
<<<<<<< HEAD
                telephonCandidat=?,
=======
>>>>>>> origin/master
                dateNaissance=?,
                sexeCandidat=?,
                ecoleCandidat=?,
                filiereCandidat=?,
                niveauEtudCandidat=?,
                cinCandidat=? WHERE idCandidat=?";
        $stmt=$CONNEXION->prepare($REQ);
<<<<<<< HEAD
        $stmt->execute([$nom,$prenom,$email,$telephon,$dateNaissance,$sexe,$ecole,$filiere,$niveau,$cin,$id]);
=======
        $stmt->execute([$nom,$prenom,$email,$dateNaissance,$sexe,$ecole,$filiere,$niveau,$cin,$id]);
>>>>>>> origin/master
        // $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    }else{

        $id=$_GET['idCandidat'];

        $REQUETE="SELECT * FROM Candidat WHERE idCandidat=?";
        $stt=$CONNEXION->prepare($REQUETE);
        $stt->execute(array($id));
        $resul=$stt->fetchAll(PDO::FETCH_ASSOC);
    }
?>
<?php 
include_once '../../connexion/connexion.php';
if(isset($_POST['valider']))
    {
        $nom=htmlspecialchars($_POST['nom']);
        $postnom=htmlspecialchars($_POST['postnom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $genre=htmlspecialchars($_POST['genre']);
        $adresse=htmlspecialchars($_POST['adress']);
        $tel=htmlspecialchars($_POST['telephone']);

        $req=$connexion->query("SELECT * FROM client where nom='$nom' and postnom='$postnom' and prenom='$prenom' and telephone='$tel' and supprimer=0");
        $existant=$req->fetch();
        if($existant['id']>=1)
        {
            if($genre='M')
            {
                $msg="le client $nom  $postnom $prenom existe deja";
                $_SESSION['msge']=$msg;
                header('location:../../views/client.php');
            }
            else
            {
                $msg="la client $nom.' '.$postnom.' '.$prenom.' '.existe deja";
                $_SESSION['msge']=$msg;
                header('location:../../views/client.php');
            }
        
            
        }
        else
        {

            $req=$connexion->prepare("INSERT INTO client (nom,postnom,prenom,genre,adresse,telephone) VALUES (?,?,?,?,?,?)");
            $req->execute(array($nom,$postnom,$prenom,$genre,$adresse,$tel));
            if($req)
            {
            
                $mesg="enregistrement reussie";
                $_SESSION['msge']=$mesg;
                header('location:../../views/client.php');
            }
        }
    }
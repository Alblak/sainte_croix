<?php 
include_once '../../connexion/connexion.php';
if(isset($_POST['Enregistrercom']))
    {
        $date=date('Y-m-d');      
        $client=htmlspecialchars($_POST['client']);
        $req=$connexion->prepare("INSERT INTO commande (client,dates) VALUES (?,?)");
        $req->execute(array($client,$date));
        if($req)
        { 
            $reqe=$connexion->prepare("SELECT id from commande ORDER BY id desc limit 1");
            $reqe->execute();
            $element=$reqe->fetch();
            if($reqe)
            {
                $id=$element['id'];
                 echo $id;

                $mesg="Votre commande viens d'être enregistrer avec succes";
                $_SESSION['msge']=$mesg;
                header("location:../../views/commande.php?idcom=$id");

            }
                
        }
    }
if(isset($_POST['Enregistrer']))
    {  
        $id=$_GET['id'];          
        $Description=htmlspecialchars($_POST['Description']);
        $Quantite=htmlspecialchars($_POST['Quantite']);
        $prix=htmlspecialchars($_POST['prix']);
        $entree=htmlspecialchars($_POST['entree']);       
        $req=$connexion->prepare("INSERT INTO panier (description,quantite,prix,entree,commande) VALUES (?,?,?,?,?)");
        $req->execute(array($Description,$Quantite,$prix,$entree,$id));
        if($req)
        { 
            $mesg="Un nouvel ajout à la commande vient d'être effectuer !";
            $_SESSION['msge']=$mesg;
            header("location:../../views/commande.php?idcom=$id");
        }
    }
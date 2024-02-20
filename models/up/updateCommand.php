<?php 
include_once '../../connexion/connexion.php';
if(isset($_POST['modifier']))
{
    $id=$_GET['id'];
    $Description=htmlspecialchars($_POST['Description']);
    $Quantite=htmlspecialchars($_POST['Quantite']);
    $prix=htmlspecialchars($_POST['prix']);
    $entree=htmlspecialchars($_POST['entree']); 

    $req=$connexion->prepare("UPDATE panier set description=?, quantite=?, prix=?, entree=? where id='$id'");
    $req->execute(array($Description,$Quantite,$prix,$entree));
    if($req)
    {
            header('location:../../views/commande.php');
            $mesg="Modification reussie";
    }

}
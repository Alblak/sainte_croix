<?php 
include '../../connexion/connexion.php';
if(isset($_GET['idpanier']))
{
    $id=$_GET['idpanier'];
    $supprimer=1;
    $req=$connexion->prepare("UPDATE panier set statut=? where id='$id'");
    $req->execute(array($supprimer));   
    if($req)
    {
        header('location:../../views/client.php');
        $mesg="suppression reussie";
        $_SESSION['msg']=$mesg;
    }
}

?>
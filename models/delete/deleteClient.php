<?php 
include '../../connexion/connexion.php';
if(isset($_GET['idclient']))
{
    $id=$_GET['idclient'];
    $supprimer=1;
    $req=$connexion->prepare("UPDATE client set supprimer=? where id='$id'");
    $req->execute(array($supprimer));
    if($req)
    {
        header('location:../../views/client.php');
        $mesg="suppression reussie";
        $_SESSION['msg']=$mesg;
    }
}

?>
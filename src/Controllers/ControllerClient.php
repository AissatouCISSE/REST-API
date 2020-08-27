<?php
require_once "bootstrap.php";


function getCompte($numero){

    $em = getEntityManager();
    $compte = $em->createQuery("SELECT c FROM Compte c WHERE c.numcompte=:numero")->setParameter('numero',$numero)->getOneOrNullResult();
    return $compte;

}

function getOperation($id_compte){

    $em = getEntityManager();
    $operation = $em->createQuery("SELECT o FROM Operation o JOIN o.compte c WHERE c.id=:compte")->setParameter('compte',$id_compte)->getResult();
    return $operation;

}

function getSoldeclient($id_client){

   $em =getEntityManager();
   $solde =$em->createQuery("SELECT c FROM Compte c JOIN c.client cl WHERE cl.id=:client")->setParameter('client',$id_client)->getResult();
   //var_dump($solde->getSolde());
   //die;
   return $solde;
}
?>




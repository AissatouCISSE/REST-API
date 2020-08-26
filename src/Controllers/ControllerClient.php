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
?>
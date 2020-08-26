<?php
require_once "bootstrap.php";


function getCompte($numero){

    $em = getEntityManager();
    $compte = $em->createQuery("SELECT c FROM Compte c WHERE c.numcompte=:numero")->setParameter('numero',$numero)->getOneOrNullResult();
    return $compte;

}
?>
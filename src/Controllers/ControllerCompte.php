<?php
require_once "../bootstrap.php";

$compte= new Compte();
extract($_POST);
$compte->setNumAgence($numagence);
$compte->setNumCompte($numcompte);
$compte->setCleRib($clerib);

$clientRepo = $entityManager->getRepository('Morale');
$personne = $clientRepo->find($_POST['client']);
//$compte->setMoral($personne);
//$compte->setMoral($entityManager->getMoral());
// var_dump($_POST);
// die();

$entityManager->persist($compte);
$entityManager->flush();

echo "success";
?>
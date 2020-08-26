<?php
header("content-type: application/json");

use Faker\Factory;
require_once 'bootstrap.php';
require_once 'vendor/autoload.php';

require_once   'src/Controllers/ControllerClient.php';

$tab = [];

//var_dump($_GET['numero']);

$demande = explode('/',$_GET['url'])[0];

if($demande=='solde'){
    
    if(isset($_GET['numero'])){
        $compte = getCompte($_GET['numero']);

        if($compte!=null){
            $tab [] = ['solde'=>$compte->getSolde()];
        } else{
            $tab [] = ['Ce compte n\'existe pas dans la base de donnes'];
        }
    } else {
        $tab [] = ['Vous n\'avez pas envoye le numero'];
    }

} else if ($demande=='operation') {
    //$tab [] = ['Pas d\'operation'];

    if(isset($_GET['compte'])){
        $op = getOperation($_GET['compte']);
        foreach ($op as $o ) {
            $t = [];
            $t[] = ['type Operation'=>$o->getTypeOperation()->getLibelle()];
            $t[] = ['Montant'=>$o->getMontant()];
            $t[] = ['Date'=>$o->getDate()];
            $tab[] = $t;
        }
        /* if($op!=null){
            $tab [] = ['operation'=>$op->getTypeoperation()];
        } else{
            $tab [] = ['Aucune operation n\'a ete effectue sur ce compte'];
        } */
    } else {
        $tab [] = ['Ce compte n\'existe pas'];
    }
}

echo json_encode($tab,JSON_PRETTY_PRINT);


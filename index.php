<?php
header("form-data: application/json");

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
        $tab [] = ['Vous n\'qvez envoye le numero'];
    }

} else {
    $tab [] = ['Pas d\'operation'];
}

echo json_encode($tab,JSON_PRETTY_PRINT);


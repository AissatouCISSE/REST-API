<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Exercice sur HTML - CSS - JS</title>
</head>
<body>
	<i class="fa fa-bank" style="font-size:48px;color:white;" text="Banque du peuple"></i>

	<nav>
			<div class="flex-container">
				<div><a href="testeur.php">Compte</a></div>
				<div><a href="../../index.php">Client</a></div>
			  
			</div>
	</nav>
	<hr> 

	<marquee><h3>Bienvenu dans la banque du peuple</h3></marquee>
 <div class="wrap">
 	<h2>Ouverture de compte</h2>
 	
 	<!-- <form id="formulairecompte"  name="formcompte" action="../Controllers/ControllerCompte.php" method="POST"> -->
	 <form id="formulairecompte"  name="formcompte" action="../../test/addcompte.php" method="POST">

 		<div class="choixcompte" style="display: flex; flex-direction: row;
	margin-left: 200px; margin-right: 200px">
 			<div>

			 <?php
			    require "../Models/liste.php";
				require "../Models/listeclient.php"; 
				?>

				
 		</div>
 		
 		</div> 

 		<div class="second" id="second" style="display: none ">
 			
 			<!-- <select type="select" id="typecompte" name="typecompte">
				<option valeur="fr">type de compte</option>
				<option valeur="nl">Courant</option>
				<option valeur="en">Epargne</option>
				<option valeur="other">Xeweul</option>
				<option valeur="other">bloque</option>
			</select> -->
			
			
			</div>


 		<h4 id="h4" style="display: none ">Infos Compte</h4>
 		<div class="colonne1" >
 		<div class="premiere" id="premiere" style="display: none ">
 			<div class="first" id="first" style="display: none ">
 			<input type="text" id="numeroagence" name="numagence" placeholder="Numero Agence">
 			<input type="text" id="numerocompte" name="numcompte" placeholder="Numero Compte">
 			<input type="text" id="clerib" name="clerib" placeholder="Cle Rib" onsubmit="return check()">
 			<input type="text" id="montant" name="montant" placeholder="Montant Initial ">
 			</div>
 			<!-- (raison social, adresse, nom employeur, et un numéro d’identification). -->

 			
 		
 		</div>
 	


 	<!-- <div class="label" id="label" style="display: none">
     		<label for="processedCheckBox">Es-tu salarié(e) ?</label>
     		<input type="checkbox" id="processedCheckBox" checked onchange="getCheckboxStatus()">
		</div> -->
		
 		</div>
	<div id="infosemploi" style="display: none" >

 		
 		<h4>Infos Employeur</h4>

 		<div class="chacha" id="chacha" style="display: none" >
 			<input type="text" id="salaire" name="salaire" placeholder="Salaire">
 			<input type="text" id="profession" name="profession" placeholder="Profession">
 			<!-- <input type="text" id="montant" name="montant" placeholder="Montant Initial "> -->
 		</div>
 		<div class="troisieme">
 			<div class="trois" style="margin-left: 80px ;margin-right: 120px;">
 			<input type="text" id="nomemployeur" name="nom" placeholder="Nom">
 			<input type="text" id="adressemployeur" name="adresse" placeholder="Adresse">
 			</div>
 			<div class="quatre" style="margin-left: 80px ;margin-right: 120px;">
 			<input type="text" id="rs" name="raisonsociale" placeholder="Raison Sociale">
 			<input type="text" name="id" id="id" placeholder="NINEA">
 			</div>
 		</div>
 	</div>

 		<div class="condition1" id="condition1" style="display: none">
 			 <label >Note: Pour ce type de compte : il n y a pas de frais d’ouverture mais il y'a un agios à retirer tous les trois mois dans votre compte.</label><br>
 			<input type="checkbox" id="processedCheckBox2" checked>
     		<label for="processedCheckBox">J'accepte les conditions d'ouverture! </label>
     		
		</div>

 		<div class="condition" id="condition" style="display: none">
 			 <label >Note: Les frais d’ouverture sont obligatoires pour ce type de compte. Ce dernier est rémunéré annuellement.</label><br>
 			<input type="checkbox" id="processedCheckBox" checked>
     		<label for="processedCheckBox">J'accepte les conditions d'ouverture! </label>
     		
		</div>
 		<!-- <div class="valider" id="valider" class="valider" style="display: none">
 		<button type="submit" name="Valider">Submit</button> 

 		
 		</div> -->

 		<div id="valider" class="valider" style="display: none">
 		<input  type="submit" name="envoyer"  value="Valider" style="background-color: #006400" >
 		
 	</div>
 		<span id="msg" style="color:red"></span>
 	</form>
 	
 </div>

</body>
<script type="text/javascript" src="../../js/compte.js"></script>
</html>
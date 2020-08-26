<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Exercice sur HTML - CSS - JS</title>
</head>

<body>
	<i class="fa fa-bank" style="font-size:48px;color:white;" text="Banque du peuple"></i>

	<nav>
			<div class="flex-container">
				<div><a href="testeur.php">Compte</a></div>
				<div><a href="index.php">Client</a></div>
			  	<div class="rechercher"><input type="text" id="rechercher" name="rechercher" placeholder="rechercher le client par CNI"></div>
			</div>
			<div class="container">
			  	<div class="recherchermoral"><input type="text" id="recherchermoral" name="recherchermoral" placeholder="rechercher l'entreprise par NINEA"></div>
			</div>
			
	</nav>
	<hr> 

	<marquee><h3>Bienvenu dans la banque du peuple</h3></marquee>
 <div class="wrap">
 	<h2>Ouverture de compte</h2>

<form id="formulaire" name="form" action="../Controllers/ControllerMoral.php" method="POST">



	<div class="choix">
 			<div>
 				
 			<select type="select" id="typeclient" name="typeclient" onChange="location = this.options[this.selectedIndex].value;" onChange="afficher()">
 				<!-- <option value=1>Choisissez le type de client</option> -->
 				<option value="client_moral.php">Client Moral</option>
				<option value="index2.php">Client Physique</option>
				
			</select>

 		</div>
 		
 		</div> 
 		<!-- <h4>Infos Compte</h4>-->
 		<h4>Infos Employeur</h4>
 		<div class="troisieme">
 			<div class="trois">
 			<input type="text" id="nomemployeur" name="nomemployeur" placeholder="Nom" >
 			<input type="text" id="raisonsociale" name="raisonsociale" placeholder="raisonsociale">
 			</div>
 			<div class="quatre">
 			<input type="text" id="rc" name="rc" placeholder="RC">
 			<input type="text" name="ninea" id="ninea" placeholder="ninea">
 			</div>

 		</div>
 	</div>

 	
 	<!-- <div id="valider" class="valider" style="d>
 		<input type="submit" name="submit"  value="Valider" style="background-color: #006400" >
 		<input type="submit" name="envoyer"  value="Envoyer" style="background-color: #006400" >
 		
 	</div> -->

 		<!-- 
 		<div class="label" id="label">
     		<label for="processedCheckBox">Es-tu salarié(e) ?</label>
     		<input type="checkbox" id="processedCheckBox" >
		</div>
	<div id="infosemploi"  >

 		<div class="chacha" id="chacha" >
 			<input type="text" id="salaire" name="salaire" placeholder="Salaire">
 			<input type="text" id="profession" name="profession" placeholder="Profession">
 			
 		</div>
 		
 		<h4>Infos Employeur</h4>
 		<div class="troisieme">
 			<div class="trois">
 			<input type="text" id="nomemployeur" name="nomentre" placeholder="Nom">
 			<input type="text" id="adressemployeur" name="adresseentre" placeholder="Adresse">
 			</div>
 			<div class="quatre">
 			<input type="text" id="rs" name="raisonsociale" placeholder="Raison Sociale">
 			<input type="text" name="identre" id="id" placeholder="NINEA">
 			</div>
 		</div>
 	</div>

 	 -->

 	 <!-- <div id="valider" class="valider" > 
 		
 		<input type="submit" name="envoyer"  value="Envoyer" style="background-color: #006400" >
 		
 	</div> -->

 	<div id="valide" class="valide" >
 		
 		<input type="submit" name="envoyer"  value="Valider" style="background-color: #006400" >
 		
 	</div>
 		<span id="msg" style="color:red"></span>
 	</form>
 	</div>
</body>

</html>
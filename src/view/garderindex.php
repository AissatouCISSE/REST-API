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
				<div><a href="compte.php">Compte</a></div>
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

 	
 	
 	<form id="formulaire" name="form" action="Controllers/ControlerPhysique.php" method="POST">
 		<!-- <h4>Infos Compte</h4>-->
 		<div class="choix">
 			<div>
 			<select type="select" id="typeclient" name="typeclient" onChange="afficher()">
 				<option value=1>Choisissez le type de client</option>
				<option value=2>Client Physique</option>
				<option value=3>Client Moral</option>
			</select>
 		</div>
 		
 		</div> 
 		
 		<h4 id="h4" style="display: none " >Infos Client</h4>
 		<div class="colonne" >	
 		<div class="aicha" id="aicha" style="display: none ">
 			
 			<input type="text" id="nom" name="nom" placeholder="Nom" >
 			<input type="text" id="prenom" name="prenom" placeholder="Prenom" >
 			<input type="text" id="adresse" name="adresse" placeholder="Adresse" >
 		</div>
 		<div class="cha" id="cha" style="display: none">
 			<input type="text" id="email" name="email" placeholder="Email" onblur="validateEmail(this);">
 			<input type="text" id="numtel" name="numero" placeholder="Numero tel" >
 			<input  type="text" id="cni" name="cni" placeholder="Numero d'Identification">
 		</div>

 		</div>
 		<div class="label" id="label" style="display: none">
     		<label for="processedCheckBox">Es-tu salarié(e) ?</label>
     		<input type="checkbox" id="processedCheckBox" checked onchange="getCheckboxStatus()">
		</div>
	<div id="infosemploi" style="display: none" >

 		<div class="chacha" id="chacha" style="display: none" >
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

 	
 	<div id="valider" class="valider" style="display: none">
 		<input type="submit" name="submit"  value="Valider" style="background-color: #006400" >
 		<!-- <input type="submit" name="envoyer"  value="Envoyer" style="background-color: #006400" > -->
 		
 	</div>
 		<span id="msg" style="color:red"></span>
 	</form>
 	
 </div>
</body>
<script type="text/javascript">
	
	function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            
        }

        return true;

}
</script>
<script type="text/javascript" src="js/monscript.js"></script>


</html>
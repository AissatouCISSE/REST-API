<!DOCTYPE html>
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>
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
			  	<div class="rechercher">
				 
				  <input type="text" id="rechercherclient" name="rechercherclient" autocomplete="off" class="form-control" placeholder="rechercher si  le client existe">
				  
				</div>
				<div id="listclient"></div>
			</div>
			<div class="container">
			  	<div class="recherchermoral"><input type="text" id="recherchermoral" name="recherchermoral" placeholder="rechercher l'entreprise par NINEA"></div>
			</div>
			
	</nav>
	<hr> 

	<marquee><h3>Bienvenu dans la banque du peuple</h3></marquee>
 <div class="wrap">
 	<h2>Infos Client</h2>
 	

 	<form id="formulaire" name="form" >
 		 <!-- <h4>Infos Compte</h4> -->
 		<div class="choix" style="margin-left: 200px;">
 			<div>
 				
 			<select type="select" id="typeclient" name="typeclient" onChange="location = this.options[this.selectedIndex].value;" onChange="afficher()">
 				<option value=1>Choisissez le type de client</option>
				<option value="index2.php">Client Physique</option>
				<option value="client_moral.php">Client Moral</option>
			</select>

 		</div>
 		
 		</div> 
 		
 		<h4 id="h4" style="display: none " >Infos Client</h4>
 		<div class="colonne" >	
 		<div class="aicha" id="aicha" style="display: none ">
 			
 			<input type="text" id="nom" name="nom" placeholder="Nom">
 			<input type="text" id="prenom" name="prenom" placeholder="Prenom">
 			<input type="text" id="adresse" name="adresse" placeholder="Adresse">
 		</div>
 		<div class="cha" id="cha" style="display: none">
 			<input type="text" id="email" name="email" placeholder="Email" onblur="validateEmail(this);"   >
 			<input type="text" id="numtel" name="numero" placeholder="Numero tel">
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
 			<input type="text" id="nomemployeur" name="nom" placeholder="Nom">
 			<input type="text" id="adressemployeur" name="adresse" placeholder="Adresse">
 			</div>
 			<div class="quatre">
 			<input type="text" id="rs" name="raisonsociale" placeholder="Raison Sociale">
 			<input type="text" name="id" id="id" placeholder="NINEA">
 			</div>
 		</div>
 	</div>

 	
 	<div id="valider" class="valider" style="display: none">
 		<input type="submit" name="envoyer"  value="Valider" style="background-color: #006400" >
 		
 	</div>

<div id="valider1" class="valider1" style="display: none">
 		<input type="submit" name="submit"  value="Submit" style="background-color: #006400" >
 		
 	</div>

 		<span id="msg" style="color:red"></span>
 	</form>

 	

 	<!--<form id="formmoral" name="formmoral" action="Controllers/ControllerMoral.php" method="POST"  style="display: none">
 		
 		<div id="info" style="display: none" >

 		<div class="chacha" id="cacha" style="display: none" >
 			<input type="text" id="salaire" name="salaire" placeholder="Salaire">
 			<input type="text" id="profession" name="profession" placeholder="Profession">
 			
 		</div>
 		
 		<h4>Infos Employeur</h4>
 		<div class="troisiem">
 			<div class="trois">
 			<input type="text" id="nomemployeur" name="nom" placeholder="Nom">
 			<input type="text" id="adressemployeur" name="adresse" placeholder="Adresse">
 			</div>
 			<div class="quatre">
 			<input type="text" id="rs" name="raisonsociale" placeholder="Raison Sociale">
 			<input type="text" name="id" id="id" placeholder="NINEA">
 			</div>
 		</div>
 	</div>

 	<div id="valider" class="valider" style="display: none">
 		<input  type="submit" name="envoyer"  value="Valider" style="background-color: #006400" >
 		
 	</div>
 	</form-->
 	
 </div>
</body>
<script type="text/javascript">
	
	function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
</script>
<script>
$(document).ready(function(){
	$('#rechercherclient').keyup(function(){
		var query = $("#rechercherclient").val();
		if(query != ''){
			$.ajax({
				url:"search.php",
				method:"POST",
				data:{query:query},
				success:function(data){
					$('#listclient').fadeIn();
					$('#listclient').html(data);
					
				}
			});
		}
	});
	
	$("body").on("click", "li", function() {
		$('#rechercherclient').val($(this).text());
		$('#listclient').fadeOut();
		 //alert($(this).text());
	});
	// $("#rechercherclient").on("click",  function() {
	// 	$('#rechercherclient').val($(this).text());
	// 	$('#listclient').fadeOut();
	// 	 //alert($(this).text());
	// });
});


</script>
<!-- <script type="text/javascript" src="js/monscript.js"></script> -->
</html>
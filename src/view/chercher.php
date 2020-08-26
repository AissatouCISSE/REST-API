<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	
	
	
	<title>Exercice sur HTML - CSS - JS</title>
</head>
<body>
<form id="formulaire" name="form" method="post" >
    <input type="text" id="prenom" name="prenom" autocomplete="off">
	<div id="listclient"></div>
</body>
</form>
<script>
$(document).ready(function(){
	$('#prenom').keyup(function(){
		var query = $("#prenom").val();
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
	// $('#list-unstyled').click(function() {
	// 	alert("ok");
    //     //$('#rechercherclient').val($(this).text());
    //     //$('#listclient').fadeOut();
	// });
	$("body").on("click", "li", function() {
		$('#prenom').val($(this).text());
		$('#listclient').fadeOut();
		 //alert($(this).text());
	});
});
</script>

</html>
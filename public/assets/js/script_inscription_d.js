$(document).ready(function() {


	
	$("form").submit(function(event) {

		event.preventDefault();

		var formScore = 0;

		// Validation du pseudo
		if($("username").val().length < 6 && > 50) {

			$('[for="username"] span').text('Minimum 6 caractères').fadeIn();

		}




		// Validation balise Select
		if($("#catChoice").val() == "null" ) {

			formScore = 0;

			// ajout des bordures rouges lors d'une erreur de validation du champ
			$("#catChoice").css("border","0.1rem solid red");

		} else {

			formScore ++;
		};

		// Validation balise Textearea
		if( $("#userComment").val().length < 15 ){

			formScore = 0;

			// ajout des bordures rouges lors d'une erreur de validation du champ
			$("#userComment").css("border","0.1rem solid red");

		} else {

			formScore ++;
		};

		// Validation finale du formulair
		if(formScore == 2) {

			alert("Le formulaire est valide !");

			$("#catChoice, #userComment").val("");

			$("#catChoice").val("null");
		};

	});

});
$(document).ready(function() {

		// Supprimer les messages d'erreurs
  		$('select, textarea, input').focus(function(){

	    	// Pour que les span soit en display none
	    	$('span').fadeOut();

	    	// Pour que les bordures rouges soient retirées
	    	$(this).removeClass('bordureRouge');

  		});

	$('form').submit(function(event) {

		event.preventDefault();

		var formScore = 0;

		// Validation du pseudo
		if($("#username_i_b").val().length < 6 || $("#username_i_b").val().length > 50) {

			$('[for="username"] span').text('Entre 6 et 50 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[username]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation du mot de passe
		if($('#password_i_b').val().length < 6 || $('#password_i_b').val().length > 20) {

			$('[for="password"] span').text('Entre 6 et 20 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[password]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation de la confirmation du mot de passe
		if($('#passwordConfirm_i_b').val().length < 6 || $('#passwordConfirm_i_b').val().length > 20) {

			$('[for="passwordConfirm"] span').text('Entre 6 et 20 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[passwordConfirm]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation finale du formulaire
    	if( formScore == 3 ){

      	// On vide le champ message
      	$('input:not([type="submit"])').val('');

      	// Redirection vers la page de connexion
      	// <?php $this->redirectToRoute('/home/') ?> 

    	};








		console.log(formScore);

	

	});

});
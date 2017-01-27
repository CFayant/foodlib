$(document).ready(function() {

	// Supprimer les messages d'erreurs
  	$('select, textarea, input').focus(function(){

	    // Pour que les span soit en display none
	    $('span').fadeOut();

	    // Pour que les bordures rouges soient retirés
	    $(this).removeClass('bordureRouge');

  	});

	$('form').submit(function(event) {

		event.preventDefault();

		var formScore = 0;

		// Validation du pseudo
		if($("#username_i_d").val().length < 6 || $("#username_i_d").val().length > 50) {

			$('[for="username"] span').text('Entre 6 et 50 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[username]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation du nom
		if($('#last_name_i_d').val().length < 6 || $('#last_name_i_d').val().length > 50) {

			$('[for="last_name"] span').text('Entre 6 et 50 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[last_name]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation du prénom
		if($('#first_name_i_d').val().length < 6 || $('#first_name_i_d').val().length > 50) {

			$('[for="first_name"] span').text('Entre 6 et 50 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[first_name]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation de l'adresse
		if($('#adress_i_d').val().length < 20 || $('#adress_i_d').val().length > 120) {

			$('[for="adress"] span').text('Entre 20 et 120 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[adress]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation de l'email
		if($('#e_mail_i_d').val().length < 6 || $('#e_mail_i_d').val().length > 50) {

			$('[for="e_mail"] span').text('Entre 6 et 50 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[e_mail]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation du numéro de téléphone
		if($('#phone_i_d').val().length < 10 || $('#phone_i_d').val().length > 10) {

			$('[for="phone"] span').text('10 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[phone]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation du moyen du moyen d'accès
		if($('#access_i_d').val().length < 6 || $('#access_i_d').val().length > 200) {

			$('[for="access"] span').text('Entre 6 et 200 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[access]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation des horaires d'accès
		if($('#access_time_i_d').val().length < 6 || $('#access_time_i_d').val().length > 200) {

			$('[for="access_time"] span').text('Entre 6 et 200 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[access_time]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation des horaires d'accès
		if($('#comment_i_d').val().length < 6 || $('#comment_i_d').val().length > 200) {

			$('[for="comment"] span').text('Entre 6 et 200 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[comment]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation du mot de passe
		if($('#password_i_d').val().length < 6 || $('#password_i_d').val().length > 20) {

			$('[for="password"] span').text('Entre 6 et 20 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[password]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

		// Validation de la confirmation du mot de passe
		if($('#passwordConfirm_i_d').val().length < 6 || $('#passwordConfirm_i_d').val().length > 20) {

			$('[for="passwordConfirm"] span').text('Entre 6 et 20 caractères requis').css("color", "red").fadeIn();
			$('[name="myform_i[passwordConfirm]"]').addClass('bordureRouge');

			formScore = 0;

		} else {

			formScore ++;
		};

	});

});
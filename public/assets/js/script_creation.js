// Attendre le chargement du DOM
$(document).ready( function(){


  // Display pour la div adressePerso
  $('[value="adresse"]').click(function(){
      $('.adressePerso').fadeIn();
      $('#borne_id').fadeOut();
  });

  // Display none pour la div adressePerso
  $('[value="borne"]').click(function(){
      $('.adressePerso').fadeOut();
      $('#borne_id').fadeIn();
  });

  // Supprimer les messages d'erreurs
  $('select, textarea, input').focus(function(){

    // Pour que les span soit en display none
    $('span').fadeOut();

    // Pour que les bordures rouges soient retirés
    $(this).removeClass('bordureRouge');

  });

  // Validation d'un formulaire
  $('form').submit(function(event){ // On capte la soumission du formulaire

    event.preventDefault(); // On bloque l'envoie du formulaire

    // Définir une variable pour la validation du formulaire
    var formScore = 0;

    // On vérifie le champ titre
    if( $('#titre').val().length < 6 ){

      // Afficher un message d'erreur
      $('[for="titre"] span').text('Minimum 6 caractères').fadeIn();
      $('[name="myform[titre]"]').addClass('bordureRouge');

      // Ramener la valeur de formScore à 0
      formScore = 0;

    } else{
      // Incrémenter formScore de 1
      formScore ++;
    };


    // On vérifie le champ borne_id
    if( $('#borne_id').val() == "null" ){

      // Afficher un message d'erreur
      $('.borne').text('Veuillez sélectionner une borne').fadeIn();
      $('#borne_id').addClass('bordureRouge');

      // Ramener la valeur de formScore à 0
      formScore = 0;

    } else{
      // Incrémenter formScore de 1
      formScore ++;
    };


    // On vérifie le champ image
    if( $('#adresse_donneur').val().length < 6){

      // Afficher un message d'erreur
      $('for="adresse_donneur"').text('Veuillez indiquer votre adresse').fadeIn();
      $('[name="myform[adresse_donneur]"]').addClass('bordureRouge');

      // Ramener la valeur de formScore à 0
      formScore = 0;

    } else{
      // Incrémenter formScore de 1
      formScore ++;
    };


    // On vérifie le champ type_date
    if( $('#type_date').val() == "null" ){

      // Afficher un message d'erreur
      $('[for="type_date"] span').text('Veuillez sélectionner le type de date').fadeIn();
      $('#type_date').addClass('bordureRouge');

      // Ramener la valeur de formScore à 0
      formScore = 0;

    } else{
      // Incrémenter formScore de 1
      formScore ++;
    };


    // On vérifie le champ date_consommation
    if( $('#date_consommation').val() == "null" ){

      // Afficher un message d'erreur
      $('[for="date_consommation"] span').text('Veuillez indiquer la date de consommation').fadeIn();
      $('#date_consommation').addClass('bordureRouge');

      // Ramener la valeur de formScore à 0
      formScore = 0;

    } else{
      // Incrémenter formScore de 1
      formScore ++;
    };

    // Validation du formulaire
    if( formScore == 5 ){

      // On vide le champ message
      $('input').val('');

      // On remet le champ chat à la valeur null
      $('select').val('null');

    };

  });

});  // Fin du chargement du DOM

// Attendre le chargement du DOM
$(document).ready( function(){

  // Display pour la div adressePerso
  $('[value="adresse du donneur"]').click(function(){
      $('.adressePerso').fadeIn();
      $('#borne_id').fadeOut();
  });

  // Display none pour la div adressePerso
  $('[value="borne"]').click(function(){
      $('.adressePerso').fadeOut();
      $('#borne_id').fadeIn();
  });


});  // Fin du chargement du DOM

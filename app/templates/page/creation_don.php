<?php $this->layout('layout', ['title' => 'creationDon']) ?>

<?php $this->start('main_content') ?>

<section class="padding">

  <div class="container">
    <h2 class="text-center">Je fais un don:</h2>

    <form method="POST" class="col-lg-6 margin-auto" enctype="multipart/form-data">

      <div class="form-group form_center">
        <label for="titre">Je donne: <span class="text-danger"></span></label>
        <textarea type="text" name="myform[titre]" class="form-control" id="titre" placeholder="Ex: Une barquette de 4 tomates."
        value=" <?= isset($form['titre']) ? $form['titre'] : "" ?> " ></textarea>
      </div>

      <div class="form-group form_center text-center">
        <h3>Sélectionner une adresse: <span class="text-danger"></span></h3>
      </div>

      <div class="form-group form_center text-center">
        <label class="radio-inline">
          <input type="radio" name="myform[adress]" value="borne" checked> Sélectionner une borne réfrigérée
        </label>

        <label class="radio-inline">
          <input type="radio" name="myform[adress]" value="adresse"> Mon adresse
        </label>
      </div>

      <div class="form-group form_center text-center">
        <select class="form-control" name="myform[borne_id]" id="borne_id" >
          <option value="">Les bornes:</option>
          <?php foreach ($bornes as $borne): ?>
            <option value="<?= $borne['id'] ?>"><?= $borne['adresse_borne'] . " " . $borne['cp_borne'] ?></option>
          <?php endforeach ?>
        </select>
      </div>

      <!-- div adresse perso -->
<!--       <div class="adresse_perso">

        <div class="form-group form_center">
          <label for="acces">Jours et horaires d'accés:</label>
          <?php if(isset($erreurs['Acces'])) : ?>
            <span class="text-danger"><?= $erreurs['Acces'] ?></span>
          <?php endif ?>
          <textarea type="text" name="myform[acces]" class="form-control" id="acces" placeholder="Ex: Lundi, Mardi, Mercredi, etc..."></textarea>
        </div>

        <div class="form-group form_center">
          <label for="numero">Numéro de téléphone:</label>
          <?php if(isset($erreurs['Numero'])) : ?>
            <span class="text-danger"><?= $erreurs['Numero'] ?></span>
          <?php endif ?>
          <input type="text" name="myform[numero]" class="form-control" id="numero" placeholder="Ex: 01 02 03 04 05">
        </div>

      </div> -->


      <div class="form-group form_center">
        <label for="image">Charger une image du produit: <span class="text-danger"></span></label>
        <input type="file" id="image" name="myform[image]" value=" <?= isset($form['image']) ? $form['image'] : "" ?> " >
      </div>

      <div class="form-group form_center">
        <label for="type_date">Le type de date de consommation: <span class="text-danger"></span></label>
        <select class="form-control" name="myform[type_id]" id="type_date" >
          <option>Type de date:</option>
          <?php foreach($liste_type_date as $type): ?>
            <option value="<?= $type['id'] ?>"><?= $type['libelle_date']?></option>
          <? endforeach ?>
        </select>
      </div>

      <div class="form-group form_center">
        <label for="date_consommation">Date de consommation: <span class="text-danger"></span></label>
        <input type="date" id="date_consommation" name="myform[date_consommation]"  >
      </div>

      <div class="col-md-12 text-center">
        <button type="submit" name="donner" class="btn btn-default donner" >Je donne</button>
      </div>

      <!-- data-toggle="modal" data-target="#donner" -->

    </form>

  </div>

</section>


<!-- Donner Modals -->
<div class="modal fade" tabindex="-1" role="dialog" id="donner" aria-labelledby="myModalLabel">
  <div class="vertical-alignment-helper ">
    <div class="modal-dialog vertical-align-center" role="document">
      <div class="modal-content">
        <div class="modal-header fond">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Confirmation d'ajout du don</h4>
        </div>
        <div class="modal-body">

            <form method="POST" class="col-lg-6 margin-auto">

              <div class="form-group form_center">
                <label for="confirmation">Confirmer mon don</label>
                <input type="checkbox" name="myform[confirmation]" value="Confirmation">
              </div>

              <div class="col-md-11 text-center">
                <input type="submit" name="envoyer" class="btn btn-default donner" >
              </div>
            </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
</div><!-- /.modal -->




<?php $this->stop('main_content') ?>


<script>

  // Attendre le chargement du DOM
  $(document).ready( function(){

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
        $('textarea').addClass('bordureRouge');

        // Ramener la valeur de formScore à 0
        formScore = 0;

      } else{
        // Incrémenter formScore de 1
        formScore ++;
      };


      // On vérifie le champ borne_id
      if( $('#borne_id').val() == "null" ){

        // Afficher un message d'erreur
        $('h3 span').text('Veuillez sélectionner une borne').fadeIn();
        $('#borne_id').addClass('bordureRouge');

        // Ramener la valeur de formScore à 0
        formScore = 0;

      } else{
        // Incrémenter formScore de 1
        formScore ++;
      };


      // On vérifie le champ image
      if( $('#image').val() == "null" ){

        // Afficher un message d'erreur
        $('[for="image"] span').text('Veuillez Charger une photo').fadeIn();
        $('[type="file"]').addClass('bordureRouge');

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
</script>

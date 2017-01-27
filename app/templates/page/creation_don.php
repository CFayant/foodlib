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
        <h3>Sélectionner une adresse: <span class="text-danger borne"></span></h3>
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
          <option value="null">Les bornes:</option>
          <?php foreach ($bornes as $borne): ?>
            <option value="<?= $borne['id'] ?>"><?= $borne['adresse_borne'] . " " . $borne['cp_borne'] ?></option>
          <?php endforeach ?>
        </select>
      </div>

      <!-- div adresse perso -->
      <div class="adressePerso">

        <div class="form-group form_center">
          <label for="adresse_donneur">Adresse: <span class="text-danger"></span></label>
          <input type="text" name="myform[adresse_donneur]" class="form-control" id="adresse_donneur" value="<?= $donneurs['for="adresse_donneur"'] ?>">
        </div>

        <div class="form-group form_center">
          <label for="acces">Jours et horaires d'accés:</label>
          <textarea type="text" name="myform[acces]" class="form-control" id="acces" placeholder="Ex: Lundi, Mardi, Mercredi, etc..."></textarea>
        </div>

        <div class="form-group form_center">
          <label for="numero">Numéro de téléphone:</label>
          <input type="text" name="myform[numero]" class="form-control" id="numero" placeholder="Ex: 01 02 03 04 05">
        </div>

      </div>


      <div class="form-group form_center">
        <label for="image">Charger une image du produit: <span class="text-danger"></span></label>
        <input type="file" id="image" name="myform[image]">
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

<?php $this->start('script') ?>
  <script src="<?= $this->assetUrl('js/script_creation.js') ?>"></script>
<?php $this->stop('script') ?>


<?php $this->layout('layout', ['title' => 'creationDon']) ?>

<?php $this->start('main_content') ?>

<section class="padding">

  <div class="container">
    <h2 class="text-center">Je fais un don:</h2>

      <?php if(!empty($erreurs)) { ?>

      <?php print_r($erreurs) ?>
          erreurs...
      <?php } ?>

    <form method="POST" class="col-lg-6 margin-auto" enctype="multipart/form-data">

      <div class="form-group form_center">
        <label for="dons">Je donne:</label>
        <?php if(isset($erreurs['Dons'])) : ?>
          <span class="text-danger"><?= $erreurs['Dons'] ?></span>
        <?php endif ?>
        <textarea type="text" name="dons" class="form-control" id="dons" placeholder="Ex: Une barquette de 4 tomates."></textarea>
      </div>

      <div class="form-group form_center">
        <label for="tags">La carégories:</label>
        <select class="form-control" name="tags">
          <option value="">Mots clés:</option>
          <option value="fruits">Fruits</option>
          <option value="légumes">Légumes</option>
          <option value="boissons">Boissons</option>
          <option value="laitiers">Produits laitiers</option>
        </select>
      </div>

      <div class="form-group form_center text-center">
        <h3>Sélectionner une adresse:</h3>
      </div>

      <div class="form-group form_center text-center">
        <label class="radio-inline">
          <input type="radio" name="adress" value="borne"> Sélectionner une borne réfrigérée
        </label>

        <label class="radio-inline">
          <input type="radio" name="adress" value="adresse"> Mon adresse
        </label>
      </div>

      <div class="form-group form_center text-center">
        <h3>Mon adresse :</h3>
      </div>

      <div class="form-group form_center text-center">
        <select class="form-control">
          <option value="">Les bornes:</option>
          <option value="borne1">Borne 1</option>
          <option value="borne2">Borne 2</option>
          <option value="borne3">Borne 3</option>
          <option value="borne4">Borne 4</option>
        </select>
        <p>Adresse du donneur</p>
      </div>

      <div class="form-group form_center">
        <label for="acces">Jours et horaires d'accés:</label>
        <?php if(isset($erreurs['Acces'])) : ?>
          <span class="text-danger"><?= $erreurs['Acces'] ?></span>
        <?php endif ?>
        <textarea type="text" name="acces" class="form-control" id="acces" placeholder="Ex: Lundi, Mardi, Mercredi, etc..."></textarea>
      </div>

      <div class="form-group form_center">
        <label for="numero">Numéro de téléphone:</label>
        <?php if(isset($erreurs['Numero'])) : ?>
          <span class="text-danger"><?= $erreurs['Numero'] ?></span>
        <?php endif ?>
        <input type="text" name="numero" class="form-control" id="numero" placeholder="Ex: 01 02 03 04 05">
      </div>

      <div class="form-group form_center">
        <label for="image">Charger une image du produit:</label>
        <input type="file" id="images" name="image">
      </div>

      <div class="form-group form_center">
        <label for="type_date">Le type de date de consommation:</label>
        <select class="form-control">
          <option>Type de date:</option>
          <option value="durabilité minimale">Date de durabilité minimale</option>
          <option value="limite de consommation">Date limite de consommation</option>
        </select>
      </div>

      <div class="form-group form_center">
        <label for="date_consommation">Date de consommation:</label>
        <?php if(isset($erreurs['Date Consommation'])) : ?>
          <span class="text-danger"><?= $erreurs['Date Consommation'] ?></span>
        <?php endif ?>
        <input type="date" id="date_consommation" name="date_consommation">
      </div>

      <div class="col-md-12 text-center">
        <button type="submit" name="donner" class="btn btn-default donner">Je donne</button>
      </div>

    </form>

  </div>

</section>


<?php $this->stop('main_content') ?>

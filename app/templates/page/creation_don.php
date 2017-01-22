<?php $this->layout('layout', ['title' => 'creationDon']) ?>

<?php $this->start('main_content') ?>

<section class="padding">

  <div class="container">
    <h2 class="text-center">Je fais un don:</h2>
    <form>

      <div class="form-group form_center">
        <label for="dons">Je donne:</label>
        <textarea type="text" name="dons" class="form-control" id="dons" placeholder="Ex: Une barquette de 4 tomates."></textarea>
      </div>

      <div class="form-group form_center">
        <label for="tags">La carégories:</label>
        <select class="form-control">
          <option>Mots clés:</option>
          <option>Fruits</option>
          <option>Légumes</option>
          <option>Boissons</option>
          <option>Produits laitiers</option>
        </select>
      </div>

      <div class="form-group form_center text-center">
        <h3>Sélectionner une adresse:</h3>
      </div>

      <div class="form-group form_center text-center">
        <label class="radio-inline">
          <input type="radio" name="borne" id="borne" value="borne"> Sélectionner une borne réfrigérée
        </label>

        <label class="radio-inline">
          <input type="radio" name="adressePerso" id="adressePerso" value="adresse"> Mon adresse
        </label>
      </div>


      <div class="form-group form_center text-center">
        <h3>Mon adresse :</h3>
      </div>

      <div class="form-group form_center text-center">
        <p>Adresse du donneur</p>
      </div>


      <div class="form-group form_center">
        <label for="acces">Jours et horaires d'accés:</label>
        <textarea type="text" name="acces" class="form-control" id="acces" placeholder="Ex: Lundi, Mardi, Mercredi, etc..."></textarea>
      </div>

      <div class="form-group form_center">
        <label for="numero">Numéro de téléphone:</label>
        <input type="text" name="numero" class="form-control" id="numero" placeholder="Ex: 01 02 03 04 05">
      </div>

      <div class="form-group form_center">
        <label for="images">Charger une image du produit:</label>
        <input type="file" id="images">
      </div>

      <div class="form-group form_center">
        <label for="type_date">Le type de date de consommation:</label>
        <select class="form-control">
          <option>Type de date:</option>
          <option>Date de durabilité minimale</option>
          <option>Date limite de consommation</option>
        </select>
      </div>

      <div class="form-group form_center">
        <label for="date_consommation">Date de consommation:</label>
        <input type="date" id="date_consommation">
      </div>


      <button type="submit" class="btn btn-default">Je donne</button>

    </form>

  </div>

</section>

<?php $this->stop('main_content') ?>

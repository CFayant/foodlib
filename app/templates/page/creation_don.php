<?php $this->layout('layout', ['title' => 'creationDon']) ?>

<?php $this->start('main_content') ?>

<section class="padding">

  <div class="container">
    <h2 class="text-center">Je fais un don:</h2>
    <form class="col-lg-6 margin-auto">

      <div class="form-group form_center">
        <label for="dons">Je donne:</label>
        <textarea type="text" name="dons" class="form-control" id="dons" placeholder="Ex: Une barquette de 4 tomates."></textarea>
      </div>

      <div class="form-group form_center">
        <label for="tags">La carégories:</label>
        <select class="form-control" name="tags">
          <option>Mots clés:</option>
          <option value="fruits">Fruits</option>
          <option value="légumes">Légumes</option>
          <option value="boissons">Boissons</option>
          <option value="produits laitiers">Produits laitiers</option>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58547.93527301496!2d2.3465382607150715!3d48.856049443109214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1485169092765" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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
        <input type="date" id="date_consommation" name="date_consommation">
      </div>

      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-default donner">Je donne</button>
      </div>

    </form>

  </div>

</section>

<?php $this->stop('main_content') ?>

<?php $this->layout('layout', ['title' => 'creationDon']) ?>

<?php $this->start('main_content') ?>

<section id="portfolio" class="padding">
  <div class="container">
    <form>
      <div class="form-group">
        <label for="dons">Je donne:</label>
        <textarea type="text" name="dons" class="form-control" id="dons" placeholder="Ex: Une barquette de 4 tomates.">
        </textarea>
      </div>
      <select class="form-control">
        <option>Mots clés:</option>
        <option>Fruits</option>
        <option>Légumes</option>
        <option>Boissons</option>
        <option>Produits laitiers</option>
      </select>
      <label class="radio-inline">
        <input type="radio" name="borne" id="borne" value="borne"> Sélectionner une borne réfrigérée
      </label>
      <label class="radio-inline">
        <input type="radio" name="adressePerso" id="adressePerso" value="adresse"> Mon adresse
      </label>
      <h3>Mon adresse :</h3>
      <p>Adresse dfhfdhvs</p>
      <div class="form-group">
        <label for="acces">Jours et horaires d'accés:</label>
        <input type="text" name="acces" class="form-control" id="acces" placeholder="Ex: Lundi, Mardi, Mercredi, etc...">
      </div>
      <div class="form-group">
      <label for="numero">Votre numéro de téléphone:</label>
        <input type="text" name="numero" class="form-control" id="numero" placeholder="Ex: 01 02 03 04 05">
      </div>
      <div class="form-group">
        <label for="images">Charger une image du produit:</label>
        <input type="file" id="images">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

  </div>

</section>

<?php $this->stop('main_content') ?>

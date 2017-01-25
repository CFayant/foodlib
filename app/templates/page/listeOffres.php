<?php $this->layout('layout', ['title' => 'listeOffres']) ?>

<?php $this->start('main_content') ?>

<section class="padding">

  <div class="text-center">
    <h2>Liste des dons disponibles</h2>
  </div>

  <?php ?>
  <div class="padding container well">
    
      <div class="col-xs-3">
        <img src="#" alt="photoDon">
      </div>

      <div class="col-xs-4">
        <h4>titre</h4>
      </div>

      <div class="col-xs-3">
        <p>id_type</p>
        <p>date</p>
      </div>

      <div class="col-xs-1">
        <p>cp_donneur</p>
      </div>

      <div class="col-xs-12 text-right">
        <a href="#">Détails</a>
      </div>

  </div>
</section>

<?php $this->stop('main_content') ?>




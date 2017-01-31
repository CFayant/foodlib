<?php $this->layout('layout', ['title' => 'listeOffres']) ?>

<?php $this->start('main_content') ?>

<!-- Affichage de la page Liste de tous les dons disponibles -->
<section class="padding">

  <div class="text-center">
    <h2>Liste des dons disponibles</h2>
  </div>

  <?php foreach ($dons as $don): ?>
    <div class="padding container well">

      <!-- Affichage de l'image du don résolu -->
      <div class="img-responsive">
        <img src="<?= $this->assetUrl('uploads/'.$don["image"]) ?>" alt="<?= $don['titre'] ?>">
      </div>

      <!-- Affichage du titre du don -->
      <div class="col-xs-4">
        <h4><?= $don['titre'] ?></h4>
      </div>

      <!-- Affichage de la date de consommation liée au don, précédée du libellé de son type de date -->
      <div class="col-xs-3">
        <p><?= $don['libelle_date'] . ' ' .  $don['date_consommation'] ?></p>
      </div>

      <!-- Affichage du code postal du donneur de ce don -->
      <div class="col-xs-1">
        <p><?= $don['cp_donneur'] ?></p>
      </div>

      <!-- Affichage du lien menant vers les détails du don -->
      <div class="col-xs-12 text-right">
        <a href="<?= $this->url( "detailOffre", ['id' => $don['id']]) ?>" class="btn btn-default donner">Détails</a>
      </div>

    </div>

  <?php endforeach ?>

</section>

<?php $this->stop('main_content') ?>

<?php $this->start('style') ?>

<link href="<?= $this->assetUrl('css/listeOffres.css') ?>" rel="stylesheet">

<?php $this->stop('style') ?>



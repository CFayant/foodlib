<?php $this->layout('layout', ['title' => 'cgu']) ?>

<?php $this->start('main_content') ?>

<section class="container padding">
  
  <div class="text-center">
    <h2 class="">Conditions Générales d'Utilisation</h2>
  </div>

  <div class="padding text-left">
    
    <div>
      <p class="padding">Les Conditions Générales d'Utilisation (CGU) s'appliquent à tout utilisateur, à savoir toute personne qui s'est inscrite sur la présente application web, nommée "FoodLib" :</p>
    </div>  

    <div class="col-xs-12">
      <p>- chaque donneur s'engage à vérifier que le produit donné n'est pas périmé au moment où il le donne et qu'il a bien respecté les conditions de conservation ;</p>
    </div>

    <div class="col-xs-12">
      <p>- si la date est "à consommer de préférence avant le", cela signifie qu'il n'y a pas de date limite de consommation ; en revanche, le produit va perdre ses caractéristiques gustatives et nutritives ;</p>
    </div>

    <div class="col-xs-12">
      <p>- principe de gratuité totale.</p>
    </div>

  </div>

</section>

<?php $this->stop('main_content') ?>

<?php $this->start('style') ?>
<link href="<?= $this->assetUrl('css/cgu.css') ?>" rel="stylesheet">
<?php $this->stop('style') ?>

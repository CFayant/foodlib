<?php $this->layout('layout', ['title' => 'detailOffre']) ?>

<?php $this->start('main_content') ?>

<section class="padding">

  <div class="container">

    <div class="col-sm-3">
      <img src="<?= $this->assetUrl('img/portfolio/cake.png') ?>" class="img-responsive" alt="">
    </div>

    <div class="col-sm-9 relative">
      <div class="col-sm-5 descriptif">
        <p>Le produit à donner et sa quantité (Ex: Tomates, une barquette de 6.)</p>

        <p>Le type de date de consommation (Ex: Date conseillée ou date de fin de consommation.)</p>
        <p>La date de consommation (Ex: 15 Janvier 2017.)</p>
      </div>

      <div class="col-sm-4 pseudo">
        <h4>pseudo ou dénomination du donneur</h4>
      </div>
    </div>

    <div class="col-sm-12 relative-padding">
      <div class="col-sm-9 float-right">

        <div class="col-sm-4 no-merge">
          <img src="<?= $this->assetUrl('img/portfolio/cake.png') ?>" class="img-responsive" alt="">
        </div>

        <div class="col-sm-5 float-right descriptif_adresse">
            <p>Adresse du donneur ou adresse d'une borne </p>

            <p>Accés: Nation métro ligne 7 et 6</p>

            <p>jour et horaires</p>
        </div>

      </div>
    </div>

    <div class="col-sm-12 text-center">
      <button type="submit" class="btn btn-default donner">Réserver !</button>
    </div>


  </div>

</section>

<?php $this->stop('main_content') ?>

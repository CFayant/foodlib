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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58547.93527301496!2d2.3465382607150715!3d48.856049443109214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1485169092765" width="500" height="500" frameborder="0" style="border:0" allowfullscreen class="img-responsive"></iframe>
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

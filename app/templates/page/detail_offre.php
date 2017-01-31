<?php $this->layout('layout', ['title' => 'detailOffre']) ?>

<?php $this->start('main_content') ?>



<!-- Affichage de la page détails du don sélectionné -->
<section class="padding">


  <div class="container">

    <div class="col-sm-3">
      <img src="<?= $this->assetUrl('img/portfolio/cake.png') ?>" class="img-responsive" alt="<?= $titre ?>">
    </div>

<!--     <pre>
    <?php var_dump($dons)?>
    </pre> -->

    <div class="col-sm-9 relative">
      <!-- Affichage du titre du dons -->
      <div class="col-sm-5 descriptif">
        <p>
          <h3><?= $dons[1]['titre'] ?></h3>
        </p>

        <!-- Affichage de la date de consommation liée au dons, précédée du libellé de son type de date -->
        <p><?= $dons[1]['libelle_date'] ?></p>
        <p><?= $dons[1]['date_consommation'] ?></p>
      </div>

      <div class="col-sm-4 pseudo">
        <h4><?= $dons[1]['username'] ?></h4>
      </div>
    </div>

    <div class="col-sm-12 relative-padding">
      <div class="col-sm-9 float-right">
        <div class="col-sm-4 no-merge">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58547.93527301496!2d2.3465382607150715!3d48.856049443109214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1485169092765" width="600" height="450" frameborder="0" style="border:0" allowfullscreen class="img-responsive"></iframe>
        </div>

        <div class="col-sm-5 float-right descriptif_adresse">

            <!-- Eléments sur le donneur OU sur la borne -->

            <!-- Eléments sur le donneur : adresse, cp, téléphone, accès et horaires -->
            <?php if (empty($dons[1]['adresse_borne'])) : ?>
              <p><?= $dons[1]['adresse_donneur'] ?></p>
              <p><?= $dons[1]['cp_donneur'] ?></p>
              <p><?= $dons[1]['telephone'] ?></p>
              <p><?= $dons[1]['acces'] ?></p>
              <p><?= $dons[1]['horaires'] ?></p>
            <?php endif ?>


            <!-- Eléments sur la borne : adresse et cp -->
            <p><?= $dons[1]['adresse_borne'] ?></p>
            <p><?= $dons[1]['cp_borne'] ?></p>

        </div>

      </div>
    </div>

    <div class="col-sm-12 text-center">
      <button type="submit" class="btn btn-default donner" data-toggle="modal" data-target="#confirmation">Réserver !</button>
    </div>

    <div class="col-xs-12 text-right">
        <a href="<?= $this->url( "listeOffres") ?>" class="btn btn-default donner">Retour</a>
    </div>


  </div>

</section>


<!-- confirmation Modals -->
<div class="modal fade" tabindex="-1" role="dialog" id="confirmation" aria-labelledby="myModalLabel">
  <div class="vertical-alignment-helper ">
    <div class="modal-dialog vertical-align-center" role="document">
      <div class="modal-content">
        <div class="modal-header fond">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Confirmation</h4>
        </div>
        <div class="modal-body">

              <div class="form-group form_center">
                <label for="confirmation">Je confirme vouloir bénéficier de ce don </label>
                <input type="checkbox" name="confirmation">
              </div>

              <div class="text-center">
                <button type="button" name="Confirmation" class="btn btn-default donner" data-toggle="modal" data-target="#code" data-dismiss="modal" aria-label="Close">Je confirme</button>
              </div>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
</div><!-- /.modal -->
<!-- Code de retrait Modals -->
<div class="modal fade" tabindex="-1" role="dialog" id="code" aria-labelledby="myModalLabel">
  <div class="vertical-alignment-helper ">
    <div class="modal-dialog vertical-align-center" role="document">
      <div class="modal-content">
        <div class="modal-header fond">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Code de retrait</h4>
        </div>
        <div class="modal-body">

            <div class="text-center"><p class="text-danger">ATTENTION !!! Veuillez prendre note de votre code de retrait unique !!!</p></div>
            <div class="text-center"><p>code de retrait unique</p></div>

              <div class="text-center">
                  <button type="submit" name="ok" class="btn btn-default donner" data-dismiss="modal" aria-label="Close">J'ai pris note</button>
              </div>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
</div><!-- /.modal -->

<?php $this->stop('main_content') ?>

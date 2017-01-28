<?php $this->layout('layout', ['title' => 'detailOffre']) ?>

<?php $this->start('main_content') ?>

<section class="padding">

  <div class="container">

    <div class="col-sm-3">
      <img src="<?= $this->assetUrl('img/portfolio/cake.png') ?>" class="img-responsive" alt="">
    </div>

    <div class="col-sm-9 relative">
      <div class="col-sm-5 descriptif">
        <p>
              <h3><?= $dons['titre'] ?></h3>
        </p>

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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58547.93527301496!2d2.3465382607150715!3d48.856049443109214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1485169092765" width="600" height="450" frameborder="0" style="border:0" allowfullscreen class="img-responsive"></iframe>
        </div>

        <div class="col-sm-5 float-right descriptif_adresse">
            <p>Adresse du donneur ou adresse d'une borne </p>

            <p>Accés: Nation métro ligne 7 et 6</p>

            <p>jours et horaires</p>
        </div>

      </div>
    </div>

    <div class="col-sm-12 text-center">
      <button type="submit" class="btn btn-default donner" data-toggle="modal" data-target="#confirmation">Réserver !</button>
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
                <label for="confirmation">Je confirme vouloir bénéficier de ce don</label>
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

            <div class="text-center"><p class="text-danger">ATTENTION veulliez prendre note de votre code de retrait unique !!!</p></div>
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

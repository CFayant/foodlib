<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>



<section class="text-center padding form-check container">

	<div class="well">
		<a class="noTextDecoration" href="<?= $this->url("inscription_b") ?>">Je suis bénéficiaire</a>
	</div>

	<div class="well">
		<a class="noTextDecoration" href="<?= $this->url("inscription_d") ?>">Je suis donneur</a>
	</div>

</section>

<?php $this->stop('main_content') ?>

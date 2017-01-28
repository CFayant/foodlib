<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<section class="text-center padding form-check container width-limit">

	<div class="well">
		<a class="TextDecoration" href="<?= $this->url("inscription_b") ?>">Je suis bénéficiaire</a>
	</div>

	<div class="well">
		<a class="TextDecoration" href="<?= $this->url("inscription_d") ?>">Je suis donneur</a>
	</div>

</section>

<?php $this->stop('main_content') ?>

<?php $this->start('style') ?>

<link href="<?= $this->assetUrl('css/inscription.css') ?>" rel="stylesheet">

<?php $this->stop('style') ?>


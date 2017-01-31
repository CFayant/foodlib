<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>

<section class="padding container form-center">

	<form method="POST" class="col-lg-6 margin-auto form-group">

		<div class="form-group">
			<label for="username">Votre Pseudo <span></span></label>
			<input type="text" name="username" class="form-control">
		</div>

		<div class="form-group">
			<label for="password">Votre Mot de Passe <span></span></label>
			<input type="password" name="password" class="form-control">
		</div>

		<div class="col-md-12 text-center">
			<input type="submit"  name="connect" value="Connexion" class="btn btn-default donner">
		</div>

	</form>

</section>

<?php $this->stop('main_content') ?>

<?php $this->start('style') ?>

<link href="<?= $this->assetUrl('css/inscription_b.css') ?>" rel="stylesheet">

<?php $this->stop('style') ?>

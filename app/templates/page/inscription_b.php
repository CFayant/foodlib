<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<section class="padding container">

	<form method="POST" class="col-lg-6 margin-auto form-group">

		<div class="form-group">
			<label for="username" class="">Votre Pseudo <span></span></label>
			<input type="text" name="myform_i[username]" class="form-control" id="username_i_b">
		</div>

		<div class="form-group">
			<label for="password">Votre Mot de Passe <span></span></label>
			<input type="password" name="myform_i[password]" class="form-control" id="password_i_b">
		</div>

		<div class="form-group">
			<label for="passwordConfirm">Confirmez Mot de Passe <span></span></label>
			<input type="password" name="myform_i[passwordConfirm]" class="form-control" id="passwordConfirm_i_b">
		</div>

		<div class="col-md-12 text-center">
			<input type="submit"  name="myform_i[inscrire_b]" value="M'inscrire" class="btn btn-default donner">
		</div>

	</form>

</section>

<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>

<script src="<?= $this->assetUrl('js/inscription_b.js') ?>"></script>

<?php $this->stop('script') ?>

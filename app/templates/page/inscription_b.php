<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<section class="padding container">

	<?php if(!empty($erreurs)) { ?>

		<?php print_r($erreurs) ?>
		    erreurs...
	<?php } ?>


	<form method="POST" class="col-lg-6 margin-auto form-group">

		<div class="form-group">
			<label for="username" class="">Votre Pseudo</label>

		<input type="text" name="username" class="form-control">
		</div>

		<div class="form-group">
			<label for="password">Votre Mot de Passe</label>
			<input type="password" name="password" class="form-control">
		</div>

		<div class="form-group">
			<label for="passwordConfirm">Confirmez Mot de Passe</label>
			<input type="password" name="passwordConfirm" class="form-control">
		</div>

		<div class="col-md-12 text-center">
			<input type="submit"  name="inscrire_b" value="M'inscrire" class="btn btn-default donner">
		</div>

	</form>

</section>

<?php $this->stop('main_content') ?>
<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<section class="padding container">

	<?php if(!empty($erreurs)) { ?>

	<?php print_r($erreurs) ?>
	    erreurs...
	<?php } ?>

	<form method="POST" class="col-lg-6 margin-auto" enctype="multipart/form-data">

		<label for="statut">Vous êtes : </label>
		<input type="radio" name="statut" value="restaurant" class="form-check"> Un Restaurant
		<input type="radio" name="statut" value="association" class="form-check"> Une Association
		<input type="radio" name="statut" value="entreprise" class="form-check"> Une entreprise

	<div class="form-group">
		<label for="username">Votre Pseudo</label>
		<input type="text" name="username" class="form-control">
	</div>

		<div class="form-group">
			<label for="last_name">Votre Nom</label>
			<input type="text" name="last_name" class="form-control">
		</div>

		<div class="form-group">
			<label for="first_name">Votre Prénom</label>
			<input type="text" name="first_name" class="form-control">
		</div>

		<div class="form-group">
			<label for="adress">Votre Adresse</label>
			<input type="text" name="adress" class="form-control">
		</div>

		<div class="form-group">
			<label for="e_mail">Votre Email</label>
			<input type="email" name="e_mail" class="form-control">
		</div>

		<div class="form-group">
			<label for="phone">Votre Numéro de Téléphone</label>
			<input type="text" name="phone" class="form-control">
		</div>

		<div class="form-group">
			<label for="access">Moyen d'accès</label>
			<textarea name="access" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<label for="access_time">Horaires d'accès</label>
			<textarea name="access_time" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<label for="img">Votre Image de profil</label>
			<input type="file" name="img">
		</div>

		<div class="form-group">
			<label for="comment">Vos Commentaires</label>
			<textarea name="comment" class="form-control"></textarea>

		</div>

		<div class="form-group">
			<label for="password">Votre Mot de Passe</label>
			<input type="text" name="password" class="form-control">
		</div>

		<div class="form-group">
			<label for="passwordConfirm">Confirmez Mot de Passe</label>
			<input type="text" name="passwordConfirm" class="form-control">
		</div>

		<div class="col-md-12 text-center">
			<input type="submit" name="inscrire_d" value="M'inscrire" class="btn btn-default donner">
		</div>

	</form>

</section>

<?php $this->stop('main_content') ?>
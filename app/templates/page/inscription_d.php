<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<section class="padding container">

	<?php if(!empty($erreurs)) { ?>

	<?php print_r($erreurs) ?>
	    erreurs...
	<?php } ?>

	<form method="POST" class="col-lg-6 margin-auto" enctype="multipart/form-data">

		<div class=" text-center row">
			<label for="statut">Vous êtes : </label>
			<input type="radio" name="myform[statut]" value="particulier" class="form-check" checked> Un particulier
			<input type="radio" name="myform[statut]" value="restaurant" class="form-check"> Un restaurant
			<input type="radio" name="myform[statut]" value="association" class="form-check"> Une association
			<input type="radio" name="myform[statut]" value="entreprise" class="form-check"> Une entreprise
		</div><br>

	<div class="form-group">
		<label for="username">Votre pseudo</label>
		<input type="text" name="myform[username]" class="form-control">
	</div>

		<div class="form-group">
			<label for="last_name">Votre nom</label>
			<input type="text" name="myform[last_name]" class="form-control">
		</div>

		<div class="form-group">
			<label for="first_name">Votre prénom</label>
			<input type="text" name="myform[first_name]" class="form-control">
		</div>

		<div class="form-group">
			<label for="adress">Votre adresse</label>
			<input type="text" name="myform[adress]" class="form-control">
		</div>

		<div class="form-group">
			<label for="e_mail">Votre email</label>
			<input type="email" name="myform[e_mail]" class="form-control">
		</div>

		<div class="form-group">
			<label for="phone">Votre numéro de téléphone</label>
			<input type="text" name="myform[phone]" class="form-control">
		</div>

		<div class="form-group">
			<label for="access">Moyen d'accès</label>
			<textarea name="myform[access]" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<label for="access_time">Horaires d'accès</label>
			<textarea name="myform[access_time]" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<label for="img">Votre image de profil</label>
			<input type="file" name="myform[img]">
		</div>

		<div class="form-group">
			<label for="comment">Vos commentaires</label>
			<textarea name="myform[comment]" class="form-control"></textarea>

		</div>

		<div class="form-group">
			<label for="password">Votre mot de passe</label>
			<input type="text" name="myform[password]" class="form-control">
		</div>

		<div class="form-group">
			<label for="passwordConfirm">Confirmez votre mot de passe</label>
			<input type="text" name="myform[passwordConfirm]" class="form-control">
		</div>

		<div class="col-md-12 text-center">
			<input type="submit" name="myform[inscrire_d]" value="M'inscrire" class="btn btn-default donner">
		</div>

	</form>

</section>

<?php $this->stop('main_content') ?>

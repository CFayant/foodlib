<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>


<section class="padding container">
	
	<form method="POST" class="col-lg-6 margin-auto" enctype="multipart/form-data" id="form_i_d">

		<div class=" text-center row">
			<label for="type_donneur_id">Vous êtes : </label>
			<input type="radio" name="myformi[type_donneur_id]" value="particulier" class="form-check" checked> Un particulier
			<input type="radio" name="myformi[type_donneur_id]" value="restaurant" class="form-check"> Un restaurant
			<input type="radio" name="myformi[type_donneur_id]" value="association" class="form-check"> Une association
			<input type="radio" name="myformi[type_donneur_id]" value="entreprise" class="form-check"> Une entreprise
		</div><br>

		<div class="form-group">
			<label for="username">Votre pseudo <span class="red"><?= (isset($erreurs['username'])) ? $erreurs['username'] : '' ?></span></label>
			<input type="text" name="myform[username]" class="form-control" id="username_i_d">
		</div>

		<div class="form-group">
			<label for="last_name">Votre nom <span class="red"><?= (isset($erreurs['last_name'])) ? $erreurs['last_name'] : '' ?></span></label>
			<input type="text" name="myformi[last_name]" class="form-control" id="last_name_i_d">
		</div>

		<div class="form-group">
			<label for="first_name">Votre prénom <span class="red"><?= (isset($erreurs['first_name'])) ? $erreurs['first_name'] : '' ?></span></label>
			<input type="text" name="myformi[first_name]" class="form-control" id="first_name_i_d">
		</div>

		<div class="form-group">
			<label for="adresse_donneur">Votre adresse <span class="red"><?= (isset($erreurs['adresse_donneur'])) ? $erreurs['adresse_donneur'] : '' ?></span></label>
			<input type="text" name="myformi[adresse_donneur]" class="form-control" id="adress_i_d">
		</div>

		<div class="form-group">
			<label for="email">Votre email <span class="red"><?= (isset($erreurs['email'])) ? $erreurs['email'] : '' ?></span></label>
			<input type="email" name="myformi[email]" class="form-control" id="mail">
		</div>

		<div class="form-group">
			<label for="telephone">Votre numéro de téléphone <span class="red"><?= (isset($erreurs['telephone'])) ? $erreurs['telephone'] : '' ?></span></label>
			<input type="text" name="myformi[telephone]" class="form-control" id="phone_i_d">
		</div>

		<div class="form-group">
			<label for="acces">Moyen d'accès <span class="red"><?= (isset($erreurs['acces'])) ? $erreurs['acces'] : '' ?></span></label>
			<textarea name="myformi[acces]" class="form-control" id="access_i_d"></textarea>
		</div>

		<div class="form-group">
			<label for="horaires">Horaires d'accès <span class="red"><?= (isset($erreurs['horaires'])) ? $erreurs['horaires'] : '' ?></span></label>
			<textarea name="myformi[horaires]" class="form-control" id="access_time_i_d"></textarea>
		</div>

		<div class="form-group">
			<label for="photo_profil">Votre image de profil <span class="red"><?= (isset($erreurs['photo_profil'])) ? $erreurs['photo_profil'] : '' ?></span></label>
			<input type="file" name="myformi[photo_profil]">
		</div>

		<div class="form-group">
			<label for="commentaire">Vos commentaires <span class="red"><?= (isset($erreurs['commentaire'])) ? $erreurs['commentaire'] : '' ?></span></label>
			<textarea name="myformi[commentaire]" class="form-control" id="comment_i_d"></textarea>
		</div>

		<div class="form-group">
			<label for="password">Votre mot de passe <span class="red"><?= (isset($erreurs['password'])) ? $erreurs['password'] : '' ?></span></label>
			<input type="password" name="myform[password]" class="form-control" id="password_i_d">
		</div>

		<div class="form-group">
			<label for="passwordConfirm">Confirmez votre mot de passe <span class="red"><?= (isset($erreurs['passwordConfirm'])) ? $erreurs['passwordConfirm'] : '' ?></span></label>
			<input type="password" name="myform[passwordConfirm]" class="form-control" id="passwordConfirm_i_d">
		</div>

		<div class="col-md-12 text-center">
			<input type="submit" name="inscrire_d" value="M'inscrire" class="btn btn-default donner">
		</div>

	</form>

</section>

<?php $this->stop('main_content') ?>

<?php $this->start('style') ?>
<link href="<?= $this->assetUrl('css/inscription_d.css') ?>" rel="stylesheet">
<?php $this->stop('style') ?>








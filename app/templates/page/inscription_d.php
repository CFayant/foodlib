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
			<label for="username">Votre pseudo <span></span></label>
			<input type="text" name="myform[username]" class="form-control" id="username_i_d">
		</div>

		<div class="form-group">
			<label for="last_name">Votre nom <span></span></label>
			<input type="text" name="myformi[last_name]" class="form-control" id="last_name_i_d">
		</div>

		<div class="form-group">
			<label for="first_name">Votre prénom <span></span></label>
			<input type="text" name="myformi[first_name]" class="form-control" id="first_name_i_d">
		</div>

		<div class="form-group">
			<label for="adresse_donneur">Votre adresse <span></span></label>
			<input type="text" name="myformi[adresse_donneur]" class="form-control" id="adress_i_d">
		</div>

		<div class="form-group">
			<label for="email">Votre email <span></span></label>
			<input type="email" name="myformi[email]" class="form-control" id="mail">
		</div>

		<div class="form-group">
			<label for="telephone">Votre numéro de téléphone <span></span></label>
			<input type="text" name="myformi[telephone]" class="form-control" id="phone_i_d">
		</div>

		<div class="form-group">
			<label for="acces">Moyen d'accès <span></span></label>
			<textarea name="myformi[acces]" class="form-control" id="access_i_d"></textarea>
		</div>

		<div class="form-group">
			<label for="horaires">Horaires d'accès <span></span></label>
			<textarea name="myformi[horaires]" class="form-control" id="access_time_i_d"></textarea>
		</div>

		<div class="form-group">
			<label for="photo_profil">Votre image de profil <span></span></label>
			<input type="file" name="myformi[photo_profil]">
		</div>

		<div class="form-group">
			<label for="commentaire">Vos commentaires <span></span></label>
			<textarea name="myformi[commentaire]" class="form-control" id="comment_i_d"></textarea>
		</div>

		<div class="form-group">
			<label for="password">Votre mot de passe <span></span></label>
			<input type="password" name="myform[password]" class="form-control" id="password_i_d">
		</div>

		<div class="form-group">
			<label for="passwordConfirm">Confirmez votre mot de passe <span></span></label>
			<input type="password" name="myform[passwordConfirm]" class="form-control" id="passwordConfirm_i_d">
		</div>

		<div class="col-md-12 text-center">
			<input type="submit" name="inscrire_d" value="M'inscrire" class="btn btn-default donner">
		</div>

	</form>

</section>

<?php $this->stop('main_content') ?>








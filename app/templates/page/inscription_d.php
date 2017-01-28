<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<section class="padding container">

	<form method="POST" class="col-lg-6 margin-auto" enctype="multipart/form-data" id="form_i_d">

		<div class=" text-center row">
			<label for="statut">Vous êtes : </label>
			<input type="radio" name="myform_i[statut]" value="particulier" class="form-check" checked> Un particulier
			<input type="radio" name="myform_i[statut]" value="restaurant" class="form-check"> Un restaurant
			<input type="radio" name="myform_i[statut]" value="association" class="form-check"> Une association
			<input type="radio" name="myform_i[statut]" value="entreprise" class="form-check"> Une entreprise
		</div><br>

		<div class="form-group">
			<label for="username">Votre pseudo <span></span></label>
			<input type="text" name="myform_i[username]" class="form-control" id="username_i_d">
		</div>

		<div class="form-group">
			<label for="last_name">Votre nom <span></span></label>
			<input type="text" name="myform_i[last_name]" class="form-control" id="last_name_i_d">
		</div>

		<div class="form-group">
			<label for="first_name">Votre prénom <span></span></label>
			<input type="text" name="myform_i[first_name]" class="form-control" id="first_name_i_d">
		</div>

		<div class="form-group">
			<label for="adress">Votre adresse <span></span></label>
			<input type="text" name="myform_i[adress]" class="form-control" id="adress_i_d">
		</div>

		<div class="form-group">
			<label for="e_mail">Votre email <span></span></label>
			<input type="email" name="myform_i[e_mail]" class="form-control" id="e_mail_i_d">
		</div>

		<div class="form-group">
			<label for="phone">Votre numéro de téléphone <span></span></label>
			<input type="text" name="myform_i[phone]" class="form-control" id="phone_i_d">
		</div>

		<div class="form-group">
			<label for="access">Moyen d'accès <span></span></label>
			<textarea name="myform_i[access]" class="form-control" id="access_i_d"></textarea>
		</div>

		<div class="form-group">
			<label for="access_time">Horaires d'accès <span></span></label>
			<textarea name="myform_i[access_time]" class="form-control" id="access_time_i_d"></textarea>
		</div>

		<div class="form-group">
			<label for="img">Votre image de profil <span></span></label>
			<input type="file" name="myform_i[img]">
		</div>

		<div class="form-group">
			<label for="comment">Vos commentaires <span></span></label>
			<textarea name="myform_i[comment]" class="form-control" id="comment_i_d"></textarea>

		</div>

		<div class="form-group">
			<label for="password">Votre mot de passe <span></span></label>
			<input type="text" name="myform_i[password]" class="form-control" id="password_i_d">
		</div>

		<div class="form-group">
			<label for="passwordConfirm">Confirmez votre mot de passe <span></span></label>
			<input type="text" name="myform_i[passwordConfirm]" class="form-control" id="passwordConfirm_i_d">
		</div>

		<div class="col-md-12 text-center">
			<input type="submit" name="myform_i[inscrire_d]" value="M'inscrire" class="btn btn-default donner">
		</div>

	</form>

</section>

<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>

<script src="<?= $this->assetUrl('js/inscription_d.js') ?>"></script>

<?php $this->stop('script') ?>







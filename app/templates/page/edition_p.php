<?php $this->layout('layout', ['title' => 'Edition']) ?>

<?php $this->start('main_content') ?>

<section class=" padding container">

	<form action="" class="col-lg-6 margin-auto">

		<label for="username" class="">Votre pseudo</label>
		<input type="text" name="myform[username]" class="form-control"><br>

		<label for="password">Votre mot de passe</label>
		<input type="password" name="myform[password]" class="form-control"><br>

		<label for="password">Confirmez votre mot de passe</label>
		<input type="password" name="myform[password]" class="form-control"><br>

		<div class="col-md-12 text-center">
			<input type="submit" value="Valider" class="btn btn-default donner">
		</div>

	</form>

</section>

<section class=" container">

	<form action="" class="col-lg-6 margin-auto">

		<label for="statut">Vous êtes : </label>
		<input type="radio" name="myform[statut]" value="restaurant" class="form-check"> un restaurant
		<input type="radio" name="myform[statut]" value="association" class="form-check"> une association
		<input type="radio" name="myform[statut]" value="entreprise" class="form-check"> une entreprise
		<br>

		<label for="username">Votre pseudo</label><br>
		<input type="text" name="myform[username]" class="form-control"><br>

		<label for="last_name">Votre nom</label>
		<input type="text" name="myform[last_name]" class="form-control"><br>

		<label for="first_name">Votre prénom</label>
		<input type="text" name="myform[first_name]" class="form-control"><br>

		<label for="adress">Votre adresse</label>
		<input type="text" name="myform[adress]" class="form-control"><br>

		<label for="e_mail">Votre email</label>
		<input type="email" name="myform[e_mail]" class="form-control"><br>

		<label for="phone">Votre numéro de téléphone</label>
		<input type="text" name="myform[phone]" class="form-control"><br>

		<label for="access">Moyens d'accès</label>
		<textarea name="myform[access]" class="form-control"></textarea><br>

		<label for="access_time">Horaires</label>
		<textarea name="myform[access_time]" class="form-control"></textarea><br>

		<label for="img">Votre image de profil</label>
		<input type="file" name="myform[img]"><br>

		<label for="comment">Vos commentaires</label>
		<textarea name="myform[comment]" class="form-control"></textarea><br>

		<label for="password2">Votre mot de passe</label>
		<input type="text" name="myform[password2]" class="form-control"><br>

		<label for="password_confirm">Confirmez votre mot de passe</label>
		<input type="text" name="myform[password_confirm]" class="form-control"><br>

		<div class="col-md-12 text-center">
			<input type="submit" value="Valider" class="btn btn-default donner">
		</div>

	</form>

</section>

<?php $this->stop('main_content') ?>

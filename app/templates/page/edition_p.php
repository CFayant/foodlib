<?php $this->layout('layout', ['title' => 'Edition']) ?>

<?php $this->start('main_content') ?>

<section class=" container">

	<form action="" class="col-lg-6 margin-auto">

		<label for="username" class="">Votre Pseudo</label>
		<input type="text" name="username" class="form-control"><br>

		<label for="password">Votre Mot de Passe</label>
		<input type="password" name="password" class="form-control"><br>

		<label for="password">Confirmez Mot de Passe</label>
		<input type="password" name="password" class="form-control"><br>

		<div class="col-md-12 text-center">	
			<input type="submit" value="M'inscrire" class="btn btn-default donner">
		</div>

	</form>

</section>

<section class=" container">

	<form action="" class="col-lg-6 margin-auto">

		<label for="statut">Vous êtes : </label>
		<input type="radio" name="statut" value="restaurant" class="form-check"> Un Restaurant 
		<input type="radio" name="statut" value="association" class="form-check"> Une Association 
		<input type="radio" name="statut" value="entreprise" class="form-check"> Une entreprise
		<br>

		<label for="username">Votre Pseudo</label><br>
		<input type="text" name="username" class="form-control"><br>

		<label for="last_name">Votre Nom</label>
		<input type="text" name="last_name" class="form-control"><br>

		<label for="first_name">Votre Prénom</label>
		<input type="text" name="first_name" class="form-control"><br>

		<label for="adress">Votre Adresse</label>
		<input type="text" name="adress" class="form-control"><br>

		<label for="e_mail">Votre Email</label>
		<input type="email" name="e_mail" class="form-control"><br>

		<label for="phone">Votre Numéro de Téléphone</label>
		<input type="text" name="phone" class="form-control"><br>

		<label for="access">Moyen d'accès</label>
		<textarea name="access" class="form-control"></textarea><br>

		<label for="access_time">Horaires d'accès</label>
		<textarea name="access_time" class="form-control"></textarea><br>

		<label for="img">Votre Image de profil</label>
		<input type="file" name="img"><br>

		<label for="comment">Vos Commentaires</label>
		<textarea name="comment" class="form-control"></textarea><br>

		<label for="password2">Votre Mot de Passe</label>
		<input type="text" name="password2" class="form-control"><br>

		<label for="password_confirm">Confirmez Mot de Passe</label>
		<input type="text" name="password_confirm" class="form-control"><br>

		<div class="col-md-12 text-center">
			<input type="submit" value="M'inscrire" class="btn btn-default donner">
		</div>

	</form>

</section>

<?php $this->stop('main_content') ?>
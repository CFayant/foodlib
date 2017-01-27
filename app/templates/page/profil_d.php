<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>

<section class="container padding text-center">

	<h1>Mon Profil</h1>

	<span><a href="<?= $this->url("edition_p") ?>">Editer</a></span>

		<div class="sizeLimit img-centered">
			<img class="img-rounded sizeLimit" src="<?= $this->assetUrl('img/portfolio/cabin.png') ?>" alt="img_profil">
		</div>
</section>

<section class="container text-center">

<h3>Mes Dons</h3><br>

	<table class="table">

		<tr>

			<th>Date d'acquisition</th>

			<th>Descriptif du produit</th>

		</tr>

		<tr>

			<td>Lorem ipsum dolor sit amet.</td>
			<td>Lorem ipsum dolor sit amet.</td>

		</tr>

	</table>


</section>

<?php $this->stop('main_content') ?>

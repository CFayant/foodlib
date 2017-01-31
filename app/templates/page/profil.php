<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>

<section class="container padding text-center">

	<h1>Mon Profil</h1>

	<span><a href="<?= $this->url("edition_p") ?>">Editer</a></span>

		<div class="img-centered">
			<img class="img-rounded sizeLimit" src="<?= $this->assetUrl('img/portfolio/cabin.png') ?>" alt="img_profil">
		</div>

</section>

<section class="container text-center">

<h3>Mes Dons</h3><br>

	<table class="table">

		<tr>

			<th>Date de don</th>

			<th>Descriptif du produit</th>

		</tr>

		<?php foreach ($dons as $don): ?>
	    	<div class="padding container well">

		    	<!-- Affichage de la date de consommation liée au don, précédée du libellé de son type de date -->
				<div class="col-xs-3">
		        	<p><?= $don['libelle_date'] . ' ' .  $don['date_consommation'] ?></p>
				</div>

		      	<!-- Affichage du titre du don -->
				<div class="col-xs-4">
					<h4><?= $don['titre'] ?></h4>
				</div>

		    </div>

	    </div>

  		<?php endforeach ?>

		<tr>

			<td>Lorem ipsum dolor sit amet.</td>
			<td>Lorem ipsum dolor sit amet.</td>

		</tr>

	</table>


</section>

<section class="container text-center">

<h3>Mes Offres Acquises</h3><br>

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

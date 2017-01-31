<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>

<section class="container padding text-center">

<!-- 	<pre>
    <?php var_dump($wuser)?>
    </pre>

    	<pre>
    <?php var_dump($dons)?>
    </pre> -->

	<h1><?= $wuser['username'] ?></h1>

	<span><a href="<?= $this->url("edition_p") ?>">Editer mon profil de donneur</a></span>

		<div class="img-centered">
			<img class="img-rounded sizeLimit" src="<?= $this->assetUrl('img/portfolio/cabin.png') ?>" alt="img_profil">
		</div>

</section>

<?php if(empty($donneur) ) : ?>
	<section class="container text-center">

		<h3>Mes Dons</h3><br>

		<table class="table">

			<tr>
	
				<th>Date de don</th>

				<th>Descriptif du produit</th>

			</tr>

			
			<?php foreach ($don_donneur as $donneur) : ?>
				<tr>
					<td><?= $donneur['heure_resa'] ?></td>
					<td><?= $donneur['titre'] ?></td>
				</tr>
			<? endforeach ?>


		</table>


	</section>
<?php endif ?>


<?php if(empty($don) ) : ?>
	<section class="container text-center">

		<h3>Mes Offres Acquises</h3><br>

		<table class="table">

			<tr>

				<th>Date d'acquisition</th>

				<th>Descriptif du produit</th>

			</tr>

			
				<?php foreach ($dons as $don) : ?>
					<tr>
						<td><?= $don['heure_resa'] ?></td>
						<td><?= $don['titre'] ?></td>
					<tr>
				<? endforeach ?>

			<tr>

		</table>

	</section>
<?php endif ?>

<?php $this->stop('main_content') ?>

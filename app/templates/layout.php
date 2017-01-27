<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>FoodLib, non au gâchis</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
	<!-- Custom Fonts -->
	<link href="<?= $this->assetUrl('css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<!-- Theme CSS -->
	<link href="<?= $this->assetUrl('css/freelancer.css') ?>" rel="stylesheet">

</head>
<body id="page-top" class="index">

	<!-- Navigation -->
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom position">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll taille">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
				</button>
				<a class="titre" href="<?= $this->url("home") ?>"> FoodLib </a>
				<p class="slogan">Dites non au gâchis !</p>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#"></a>
					</li>
					<li class="page-scroll">
						<a href="<?= $this->url("creationDon") ?>">Donner</a>
					</li>
					<li class="page-scroll">
						<a href="<?= $this->url("listeOffres") ?>">Chercher</a>
					</li>
					<li class="page-scroll">
						<a href="<?= $this->url("inscription") ?>">Inscription</a>
					</li>
					<li class="page-scroll">
						<a href="#" data-toggle="modal" data-target="#connexion">Connexion</a>
					</li>
					<li class="page-scroll">
						<a href="#" data-toggle="modal" data-target="#deconnecter">Deconnexion</a>
					</li>
					<li class="page-scroll">
						<a href="<?= $this->url("profil_b") ?>">Profil</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<?php echo $this->section('main_content'); ?>

	<!-- Footer -->
	<footer class="text-center">
		<div class="footer-above">
			<div class="container">
				<div class="row">
					<div class="footer-col col-md-4 left">
						<h3><a href="<?= $this->url("cgu") ?>">CGU</a></h3>
					</div>

					<div class="footer-col col-md-4 icone">
						<ul class="list-inline">
							<li>
								<a href="#" class="btn-social btn-outline info"><span>Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
							</li>

							<li>
								<a href="#" class="btn-social btn-outline info"><span>Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
							</li>

							<li>
								<a href="#" class="btn-social btn-outline info"><span>Linkedin</span><i class="fa fa-fw fa-linkedin"></i></a>
							</li>

							<li>
								<a href="#" class="btn-social btn-outline info" data-toggle="modal" data-target="#contacter"><span>Nous contacter</span><i class="fa fa-fw fa-envelope"></i></a>
							</li>

							<li>
								<a href="#" class="btn-social btn-outline info" data-toggle="modal" data-target="#signaler"><span>Signaler un problème</span><i class="fa fa-fw fa-exclamation"></i></a>
							</li>

						</ul>
					</div>

					<div class="footer-col col-md-4 right">
						<h3>FoodLib&copy; 2017</h3>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
		<a class="btn btn-primary" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>
</div>


<!-- contact Modals -->
<div class="modal fade" tabindex="-1" role="dialog" id="contacter" aria-labelledby="myModalLabel">
	<div class="vertical-alignment-helper ">
	  <div class="modal-dialog vertical-align-center" role="document">
	    <div class="modal-content">
	      <div class="modal-header fond">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Nous contacter</h4>
	      </div>
	      <div class="modal-body">

		        <form method="POST" class="col-lg-6 margin-auto">

		        	<div class="form-group form_center">
			        	<label for="pseudo">Pseudo</label>
			        	<input type="text" name="pseudo" class="form-control" placeholder="Votre pseudo">
			        </div>

		        	<div class="form-group form_center">
			        	<label for="message">Votre message</label>
			        		<textarea name="message" class="form-control" placeholder="Votre message"></textarea>
			        </div>
							<div class="text-center">
		        		<input type="submit" name="envoyer" class="btn btn-default donner">
		        	</div>
		        </form>

	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
  </div>
</div><!-- /.modal -->


<!-- Signalement Modals -->
<div class="modal fade" tabindex="-1" role="dialog" id="signaler" aria-labelledby="myModalLabel">
	<div class="vertical-alignment-helper ">
	  <div class="modal-dialog vertical-align-center" role="document">
	    <div class="modal-content">
	      <div class="modal-header fond">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Signaler un problème</h4>
	      </div>
	      <div class="modal-body">

		        <form method="POST" class="col-lg-6 margin-auto">

		        	<div class="form-group form_center">
			        	<label for="pseudo">Pseudo</label>
			        	<input type="text" name="pseudo" class="form-control" placeholder="Votre pseudo">
			        </div>

		        	<div class="form-group form_center">
			        	<label for="signalement">Type de signalement</label>
			        	<input type="text" name="signalement" class="form-control" placeholder="Quel est l'origine du problème?">
			        </div>

		        	<div class="form-group form_center">
			        	<label for="message">Je Signal</label>
			        		<textarea name="message" class="form-control" placeholder="Votre message"></textarea>
			        </div>

							<div class="text-center">
		        		<input type="submit" name="envoyer" class="btn btn-default donner">
		        	</div>
		        </form>

	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
  </div>
</div><!-- /.modal -->


<!-- Connexion Modals -->
<div class="modal fade" tabindex="-1" role="dialog" id="connexion" aria-labelledby="myModalLabel">
	<div class="vertical-alignment-helper ">
	  <div class="modal-dialog vertical-align-center" role="document">
	    <div class="modal-content">
	      <div class="modal-header fond">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Connexion</h4>
	      </div>
	      <div class="modal-body">

		        <form method="POST" class="col-lg-6 margin-auto">

		        	<div class="form-group form_center">
			        	<label for="pseudo">Pseudo</label>
			        	<input type="text" name="pseudo" class="form-control" placeholder="Votre pseudo">
			        </div>

		        	<div class="form-group form_center">
			        	<label for="mdp">Password</label>
			        	<input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
			        </div>

							<div class="text-center">
		        		<input type="submit" name="Connecter" class="btn btn-default donner" value="Se connecter">
		        	</div>
		        </form>

	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
  </div>
</div><!-- /.modal -->


<!-- deconnexion Modals -->
<div class="modal fade" tabindex="-1" role="dialog" id="deconnecter" aria-labelledby="myModalLabel">
	<div class="vertical-alignment-helper ">
	  <div class="modal-dialog vertical-align-center" role="document">
	    <div class="modal-content">
	      <div class="modal-header fond">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Connexion</h4>
	      </div>
	      <div class="modal-body">

		        <form method="POST" class="col-lg-6 margin-auto">

		        	<div class="text-center">
								<h4>Je me deconnecte !</h4>
			        </div>

							<div class="text-center">
		        		<input type="submit" name="deconnecter" class="btn btn-default donner" value="Se deconnecter">
		        	</div>
		        </form>

	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
  </div>
</div><!-- /.modal -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>


<?php echo $this->section('script'); ?>


</body>
</html>

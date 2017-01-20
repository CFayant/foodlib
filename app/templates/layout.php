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
				<a class="titre" href="#"> FoodLib </a>
				<p class="slogan">Dites non au gâchis !</p>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#"></a>
					</li>
					<li class="page-scroll">
						<a href="#">Inscription</a>
					</li>
					<li class="page-scroll">
						<a href="#">Connexion</a>
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
						<h3><a href="#">CGU</a></h3>
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
								<a href="#" class="btn-social btn-outline info"><span>Nous contacter</span><i class="fa fa-fw fa-envelope"></i></a>
							</li>

							<li>
								<a href="#" class="btn-social btn-outline info"><span>Signaler un problème</span><i class="fa fa-fw fa-exclamation"></i></a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
</body>
</html>
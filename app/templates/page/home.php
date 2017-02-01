<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<!-- Section 1 -->
<section id="portfolio" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>A propos de FoodLib</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            

                    <div class="col-sm-4 col-sm-offset-4">
                        <img src="<?= $this->assetUrl('img/portfolio/cake.png') ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <p class="text-center padding">Foodlib est un site à but non lucratif créé pour mettre en relation des donneurs avec des individus en situation précaire pour leur proposer une aide alimentaire.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->

    <section class="section2">

        <div class="container">
            <div class="row display_inline_block col-lg-6" >

                <h3><a href="<?= $this->url("creationDon") ?>" class="btn_cherche  text-center">Je donne</a></h3>
                <p>Vous êtes donneur ? Foodlib vous permet de créer vos annonces personnalisées afin de mettre les denrées de votre choix à disposition des bénéficiaires. Cliquez sur "Je donne" pour commencer à créer vos annonces !</p>

            </div>

            <div class="row display_inline_block col-lg-6">

                <h3><a href="<?= $this->url("listeOffres") ?>" class="btn_cherche  text-center">Je recherche</a></h3>
                <p>Vous êtes bénéficiaire ? Foodlib vous permet de profiter des nombreuses denrées alimentaires déposées par nos donneurs. Cliquez sur "Je recherche" pour commencer à consulter les annonces !</p>

            </div>
        </div>

    </section>

    <?php $this->stop('main_content') ?>

    <?php $this->start('style') ?>

    <link href="<?= $this->assetUrl('css/home.css') ?>" rel="stylesheet">

    <?php $this->stop('style') ?>

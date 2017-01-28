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
                <div class="col-sm-4 portfolio-item">
                        <img src="<?= $this->assetUrl('img/portfolio/cabin.png') ?>" class="img-responsive" alt="">
                </div>

                <div class="col-sm-4 portfolio-item">
                        <img src="<?= $this->assetUrl('img/portfolio/cake.png') ?>" class="img-responsive" alt="">
                </div>

                <div class="col-sm-4 portfolio-item">
                        <img src="<?= $this->assetUrl('img/portfolio/circus.png') ?>" class="img-responsive" alt="">
                </div>

                <div class="col-lg-12 text-center">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta iste autem odio, explicabo quisquam, expedita dolores dignissimos nesciunt odit quod, repudiandae iusto aliquam! Non accusamus amet sapiente fugit, nulla a..</p>

                </div>

            </div>
        </div>
    </section>

    <!-- Section 2 -->

    <section class="section2">

        <div class="container">
                <div class="row display_inline_block col-lg-6" >

                        <h3><a href="<?= $this->url("creationDon") ?>" class="btn_cherche">Je donne</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tempore dicta non impedit voluptatibus, repellat dolor natus similique perspiciatis inventore magni consequuntur alias, nesciunt culpa. Dicta ea culpa vero modi.</p>

                </div>

                <div class="row display_inline_block col-lg-6">

                        <h3><a href="<?= $this->url("listeOffres") ?>" class="btn_cherche">Je recherche</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos in at sed, mollitia cumque sint, provident commodi, non cum atque nam cupiditate sequi eaque nesciunt minima. Deleniti, iure voluptatibus totam.</p>

                </div>
        </div>

    </section>

<?php $this->stop('main_content') ?>

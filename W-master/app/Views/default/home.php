<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Accueil', 'current' => 'Accueil']);


    //use Model\Shortcut;
    $this->start('contenu')

 ?>






    <div class="row headline"><!-- Begin Headline -->

     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
              </ul>
            </div>
        </div>

        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>Bienvenue sur Part Âge.</h3>
            <p class="quote-text text-accueil">Partager une expérience de vie, une anecdote,
            des conseils aux futurs générations, votre avis sur la société actuelle...<br />
            N'hésitez pas à vous inscrire sur Part Âge !<br />
            Inscription gratuite et rapide !</p>
<!--
        Connexion

-->

    </div><!-- End Headline -->

    <div class="row gallery-row"><!-- Begin Gallery Row -->

    	<div class="span12">
            <h4 class="title-bg">Les Derniers Partages</h4>
        </div>

    </div><!-- End Gallery Row -->

    <div class="row"><!-- Begin Bottom Section -->

    	<!-- Blog Preview
        ================================================== -->
    	 <!-- Blog Post 1 -->
       <?php foreach ($partages as $partage) : ?>
        <div class="span5 blog dernier-partage">
            <article class="clearfix">
              <div class="thumbnail img-home">
                <a href="blog-single.htm"><img class="img-responsive" src="<?= $this->assetUrl('/img/partages/'. $partage->PHOTOPARTAGE  .''); ?>" alt="Partage" class="align-left"></a>
              </div>
                <h4 class="title-bg"><a href=""><?= Shortcut::getTitre($partage->TITREPARTAGE); ?></a></h4>
                  <p><?= Shortcut::getAccroche($partage->CONTENUPARTAGE); ?> </p>
                  <a href="#">Lire plus</a>
                    <div class="post-summary-footer">
                        <ul class="post-data-3">
                            <li><i class="icon-calendar"></i><?= $partage->DATEPARTAGE; ?></li>
                            <li><i class="icon-user"></i> <a href="#"><?= $partage->PRENOMPARTAGE; ?> <?= $partage->NOMPARTAGE; ?></a></li>
                            <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                        </ul>
                    </div>
            </article>
        </div>
         <?php endforeach; ?>


        <!-- Client Area<a href="#">Lire plus</a>
        ================================================== -->


    </div><!-- End Bottom Section -->

</div>
<?php $this->stop('contenu') ?>

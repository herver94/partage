<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Accueil', 'current' => 'Accueil']);
    use Model\Shortcut;
    $this->start('contenu') ?>



    <div class="row headline"><!-- Begin Headline -->

      <!-- Slider Carousel
        ================================================== -->

         <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><img src="<?= $this->assetUrl('/img/partages/21.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/23.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/24.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/17.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/15.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/18.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/19.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/20.jpg'); ?>" alt="slider" /></li>
              </ul>
            </div>
        </div>

        <!-- Headline Text
        ================================================== -->
        <div class="span4">
          <h3 class="title-bg">Bienvenue sur Part Âge</h3>
            <p class="quote-text text-accueil">Partager une expérience de vie, une anecdote,
            des conseils aux futurs générations, votre avis sur la société actuelle...<br />
            N'hésitez pas à vous inscrire sur Part Âge !<br />
            Inscription gratuite et rapide !</p>
<!--
        Connexion

-->

    <div <?php if(!empty($w_user)){
        echo 'style="display:none;"';
      }; ?> class="container">
       
       <div class="row-fluid connect">
           <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
               <div class="container-fluid container-login formulaire">
                   <div class="panel panel-default" id="panel-login">
                       <div class="panel-body">

                           <h4 id="title-login">Connectez-vous</h4>    

                           <form method="post" action="#">                   

                               <div class="form-group">
                                   <input type="text" name="login"  placeholder="Votre email ou votre nom">
                               </div>
                               <div class="form-group">
                                   <input type="password" name="password" placeholder="Mot de passe">
                               </div>
                               <button type="submit" class="btn btn-default btn-profil">Connexion</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>

       </div>
    </div>
  </div>
    </div><!-- End Headline -->

    <div class="row-fluid gallery-row"><!-- Begin Gallery Row -->

      <div class="span12">
            <h4 class="title-bg">Les Derniers Partages</h4>
        </div>

    </div><!-- End Gallery Row -->

    <div class="row-fluid"><!-- Begin Bottom Section -->
       <?php foreach ($partages as $partage) : ?>
        <div class="span5 blog dernier-partage">
            <article class="clearfix">
              <div class="thumbnail img-home">
                <a href="<?= $this->url('default_partage', ['id' => $partage->IDPARTAGE, 'slug' => Shortcut::generateSlug($partage->TITREPARTAGE)]); ?>"><img class="img-responsive" src="<?= $this->assetUrl('/img/partages/'. $partage->PHOTOPARTAGE  .''); ?>" alt="Partage" class="align-left"></a>
              </div>
                <h4 class="title-bg"><a href="<?= $this->url('default_partage', ['id' => $partage->IDPARTAGE, 'slug' => Shortcut::generateSlug($partage->TITREPARTAGE)]); ?>"><?= Shortcut::getTitre($partage->TITREPARTAGE); ?></a></h4>
                  <p><?= Shortcut::getAccroche($partage->CONTENUPARTAGE); ?> </p>
                  <a href="<?= $this->url('default_partage', ['id' => $partage->IDPARTAGE, 'slug' => Shortcut::generateSlug($partage->TITREPARTAGE)]); ?>">Lire plus</a>
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
    </div><!-- End Bottom Section -->

</div>
<?php $this->stop('contenu') ?>

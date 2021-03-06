<?php

    use Model\CategoriesModel;
    use Model\DBFactory;
    use Controller\DefaultController;

    $CM = new CategoriesModel;
    $categories = $CM->findCategories();

    DBFactory::start();

            # Récupération des Données de l'Article
          //  $tags = \ORM::for_table('tags')->find_many();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Part Âge</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Part Age le site web qui donne la parole aux seniors !">
<meta name="keywords" content="partage, seniors, experiences de vie, anecdotes, conseils, generations futurs, avis sur la societe actuelle, blog, personnes agees, grands-parents, mamie, papie, enfants, parents, petits-enfants, generation, souvenirs">
<meta name="author" content="part-age.net">

<!-- ================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?= $this->assetUrl('/css/bootstrap.css'); ?>">
<link rel="stylesheet" href="<?= $this->assetUrl('/css/bootstrap-responsive.css'); ?>">
<link rel="stylesheet" href="<?= $this->assetUrl('/css/bootstrap-responsive.css'); ?>" />
<link rel="stylesheet" href="<?= $this->assetUrl('/css/flexslider.css'); ?>" />
<link rel="stylesheet" href="<?= $this->assetUrl('/css/custom-styles.css'); ?>">
<link rel="stylesheet" href="<?= $this->assetUrl('/css/style.css'); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.1/css/dropify.css" />
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Cantarell|Roboto" rel="stylesheet">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]-->

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?= $this->assetUrl('/img/fiviconPartAge.ico'); ?>">
<link rel="apple-touch-icon" href="<?= $this->assetUrl('/img/apple-touch-icon.png'); ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?= $this->assetUrl('/img/apple-touch-icon-72x72.png'); ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?= $this->assetUrl('/img/apple-touch-icon-114x114.png'); ?>">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="<?= $this->assetUrl('/js/bootstrap.js'); ?>"></script>
<script src="<?= $this->assetUrl('/js/jquery.prettyPhoto.js'); ?>"></script>
<script src="<?= $this->assetUrl('/js/jquery.flexslider.js'); ?>"></script>
<script src="<?= $this->assetUrl('/js/jquery.custom.js'); ?>"></script>

<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.1/js/dropify.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $("#btn-blog-next").click(function () {
              $('#blogCarousel').carousel('next')
            });
             $("#btn-blog-prev").click(function () {
              $('#blogCarousel').carousel('prev')
            });

             $("#btn-client-next").click(function () {
              $('#clientCarousel').carousel('next')
            });
             $("#btn-client-prev").click(function () {
              $('#clientCarousel').carousel('prev')
            });

        });

         $(window).load(function(){

            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true,
                start: function(slider){
                  $('body').removeClass('loading');
                }
            });
        });

</script>

</head>
<body class="home">

    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>

    <div class="container">

      <div class="row header"><!-- Begin Header -->

        <!-- Logo
        ================================================== -->
        <div class="span4 logo">
        	<a href="index.htm"><img src="<?= $this->assetUrl('/img/logoPartAge.png'); ?>" alt="Logo Part Age" /></a>
            <h4 class="slogan">Le site qui donne la parole aux seniors !</h4>
        </div>

        <!-- Main Navigation
        ================================================== -->
        <div class="span8 navigation">
            <div class="navbar hidden-phone">

            <ul class="nav">
               <li <?php if($current == 'Accueil') {
                    echo 'class="active"';
                } ?>
                ><a href="<?= $this->url("default_home"); ?>">Accueil</a></li>


            <li <?php  foreach($categories as $categorie) {if($current == $categorie->getCHEMIN() ) { echo 'class="active"'; }} ?> >

                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lire les partages <b class="caret"></b></a>
                <ul class="dropdown-menu">

                    <?php foreach($categories as $categorie) : ?>
                        <li><a href="<?= $this->url("default_categorie", ["categorie" => strtolower($categorie->getCHEMIN())]); ?>"><?= $categorie->getLIBELLECATEGORIE(); ?></a></li>
                    <?php endforeach; ?>

                </ul>
             <?php if(empty($w_user)) : ?>
             </li>
                <li> <a href="<?= $this->url("default_inscription");?>">Inscription</a></li>
                <li> <a href="<?= $this->url("default_connexion");?>">Connexion</a></li>
                <li> <a href="<?= $this->url("default_contact"); ?>">Contact</a></li>

            </ul>
            <?php else : ?>
                <li <?php if($current == 'profil') {
                    echo 'class="active"';
                } ?>>
                <a href="<?= $this->url('default_profil'); ?>">Mon Compte</a></li>

                <li <?php if($current == 'contact') {
                    echo 'class="active"';
                } ?>>

                 <a href="<?= $this->url("default_contact"); ?>">Contact</a></li>

                <li <?php if($current == 'partagez') {
                    echo 'class="active"';
                } ?>>

                <a href="<?= $this->url("default_redaction"); ?>">Partagez ! </a></li>

                 <?php if($w_user['ROLE'] == 'admin') : ?>

                   <li <?php if($current == 'moderation') {
                       echo 'class="active"';
                   } ?>>


                    <a href="<?= $this->url("admin_moderation"); ?>">Modération </a></li>

                 <?php endif; ?>

                <li> <a href="<?= $this->url('default_deconnexion') ?>">Déconnexion</a></li>

            <?php endif; ?>

            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')" class="menu-responsive">
                    <option value="">Menu...</option>
                    <option value="<?= $this->url("default_home"); ?>" class="accueil">ACCUEIL</option>
                    <option value="<?php  foreach($categories as $categorie) {if($current == $categorie->getCHEMIN() ) { echo 'class="active"'; }} ?>">Lire les partages</option>
                       <?php foreach($categories as $categorie) : ?>
                        <option value="<?= $this->url("default_categorie", ["categorie" => strtolower($categorie->getCHEMIN())]); ?>">- <?= $categorie->getLIBELLECATEGORIE(); ?></option>
                    <?php endforeach; ?>

                    <?php if(empty($w_user)) : ?>
                    <option value="<?= $this->url("default_inscription");?>">Inscription</option>
                    <option value="<?= $this->url("default_connexion");?>">Connexion</option>
                    <option value="<?= $this->url("default_contact"); ?>">Contact</option>

                    <?php else : ?>
                    <option value="<?= $this->url('default_profil'); ?>">Mon compte</option>
                    <option value="<?= $this->url("default_redaction"); ?>">Partager !</option>
                    <option value="<?= $this->url('default_deconnexion') ?>">Déconnexion</option>
                    <option value="<?= $this->url("default_contact"); ?>">Contact</option>

                    <?php if($w_user['ROLE'] == 'admin') : ?>
                    <option value="<?= $this->url('admin_moderation') ?>">Modération</option>
                    <?php endif; ?>
                    <?php endif; ?>

                </select>
                </div>
            </form>
        </div>
      </div><!-- End Header -->


    <?= $this->section('contenu') ?>
 <!-- Footer Area
        ================================================== -->

	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
        	<div class="row footer-row">
                <div class="span3 footer-col">
                   <img src="<?= $this->assetUrl('/img/logoPartAge.png'); ?>" alt="Logo Part Age" /><br /><br />
                </div>
                <div class="span3 footer-col">
                    <h5>À Propos</h5>
                    <address class="address-footer">
                        <strong id="partage">Part Âge</strong><br />
                        157 Boulevard Macdonald<br />
                        75019 PARIS<br />
                    </address>
                </div>
                <div class="span3 footer-col">
                   <ul class="social-icons">
                        <li><a href="https://www.facebook.com/partage.net/" class="social-icon facebook" target="_blank"></a></li>
                        <li><a href="https://twitter.com/Part_ages" class="social-icon twitter" target="_blank"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                    </ul>
                </div>
                <!-- Single button -->
                <div class="span3 footer-col">

                   <h4 class="tag">TAGS</h4>
                    <div class="btn-group">
                    <!-- Standard button -->

                      <?php foreach ($tags as $tag) {
                                echo '<button type="button" class="btn btn-default btn-tag"> '.$tag->LIBELLETAGS.' </button>';
                            }?>
                    </div>
                </div>
            </div>
            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright <?php echo date('Y')?> Part Âge. Tout droits réservés.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="<?= $this->url("default_home"); ?>">ACCUEIL</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="<?= $this->url("default_conditionsGenerale"); ?>">Conditions Générales D'utilisation</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="<?= $this->url("default_contact"); ?>">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->
        </div>
    </div><!-- End Footer -->

    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Haut de page </div>

</body>
</html>

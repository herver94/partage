<?php 
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Accueil', 'current' => 'Accueil']);
    //use Model\Shortcut;
?>
<?php $this->start('contenu') ?>


     
    <div class="row headline"><!-- Begin Headline -->
    
     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><img src="<?= $this->assetUrl('/img/partages/21.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/23.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/24.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/19.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/17.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/15.jpg'); ?>" alt="slider" /></li>
                <li><img src="<?= $this->assetUrl('/img/partages/18.jpg'); ?>" alt="slider" /></li>
                
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
        ----------------------------------------------------    
-->
    <div class="container">
       <div class="row">
           <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
               <div class="container-fluid container-login formulaire">
                   <div class="panel panel-default" id="panel-login">
                       <div class="panel-body">
                           <h4 id="title-login">Connectez-vous</h4>    
                           <form>
                               <div class="form-group">
                                   <input type="email" name="email"  placeholder="Email">
                               </div>
                               <div class="form-group">
                                   <input type="password" name="password" placeholder="Mot de passe">
                               </div>
                               <button type="submit" class="btn btn-default">Connexion</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>
       </div>
    </div>
        </div>
        
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
       <div class=" container-fluid row-fluid">
        <div class="span5 blog dernier-partage">
            <article class="clearfix">
                <a href="blog-single.htm"><img src="<?= $this->assetUrl('/img/gallery/gallery-img-1-4col.jpg'); ?>" alt="Post Thumb" class="align-left"></a>
                <h4 class="title-bg"><a href="blog-single.htm">A great artist is always before his time</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.<br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. </p><a href="#">Lire plus</a>
                    <div class="post-summary-footer">
                        <ul class="post-data-3">
                            <li><i class="icon-calendar"></i> 09/04/15</li>
                            <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a></li>
                        </ul>
                    </div>
            </article>
        </div>
        <div class="span5 blog dernier-partage">
            <article class="clearfix">
                <a href="blog-single.htm"><img src="<?= $this->assetUrl('/img/gallery/gallery-img-1-4col.jpg'); ?>" alt="Post Thumb" class="align-left"></a>
                <h4 class="title-bg"><a href="blog-single.htm">A great artist is always before his time</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.<br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. </p><a href="#">Lire plus</a>
                    <div class="post-summary-footer">
                        <ul class="post-data-3">
                            <li><i class="icon-calendar"></i> 09/04/15</li>
                            <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a></li>
                        </ul>
                    </div>
            </article>
        </div>
       </div>
    
        
        <!-- Client Area<a href="#">Lire plus</a>
        ================================================== -->

        
    </div><!-- End Bottom Section -->
    
</div>
<?php $this->stop('contenu') ?>
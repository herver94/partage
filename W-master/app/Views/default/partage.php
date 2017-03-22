<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Partage', 'current' => 'partage']);
    use Model\Shortcut;
    use Model\CategoriesModel;
    use Model\DBFactory;
      $CM = new CategoriesModel;
      $categories = $CM->findCategories();

     $this->start('contenu');
?>

  <!-- Blog Content
    ================================================== -->
    <div class="row"><!--Container row-->

        <!-- Blog Full Post
        ================================================== -->
        <div class="span8 blog">

            <!-- Blog Post 1 -->
            <article>
                <h3 class="title-bg"><a href="#"><?= $partage->TITREPARTAGE; ?></a></h3>
                <div class="post-content">
                    <a href="#"><img src="<?= $this->assetUrl('img/partages/'. $partage->PHOTOPARTAGE  ); ?> " class="img-categorie" alt="Post Thumb"></a>

                    <div class="post-body">
                        <p><?= $partage->CONTENUPARTAGE; ?></p>
                    </div>

                    <div class="post-summary-footer">
                        <ul class="post-data">
                            <li><i class="icon-calendar"></i> <?= $partage->DATEPARTAGE; ?></li>
                            <li><i class="icon-user"></i> <a href="#"><?= $partage->PRENOMUSER; ?> <?= $partage->NOMUSER; ?></a></li>
                            <li><i class="icon-comment"></i> <a href="#"><?= count($commentaires); ?> Commentaires</a></li>
                        </ul>
                    </div>
                </div>
            </article>

        <!-- Post Comments
        ================================================== -->
            <section class="comments">
                <h4 class="title-bg"><a name="comments"></a><?= count($commentaires); ?> Commentaire(s) pour l'instant</h4>
               <ul>
                 <?php foreach ($commentaires as $commentaire) : ?>
                    <li>
                        <span class="comment-name"><?= $commentaire->PRENOMUSER; ?> <?= $commentaire->NOMUSER; ?></span>
                        <span class="comment-date"><?= $commentaire->DATECOMMENTAIRE; ?></span>
                        <div class="comment-content"><?= $commentaire->CONTENUCOMMENTAIRE; ?> </div>

                    </li>
                  <?php endforeach; ?>

               </ul>
                <!-- Comment Form -->
                <?php if(empty($w_user)){ echo '<div class="comments"> <a href="'.$this->url("default_home").'"> Vous devez être connecté pour laisser un commentaire</a></div>'; }; ?>
                <div <?php if(empty($w_user)){ echo 'style="display:none;"'; }; ?>  class="comment-form-container">
                    <h6>Laisser un commentaire</h6>
                    <form method="post" action="#" id="comment-form">
                        <input type="hidden" value="<?= $partage->IDPARTAGE; ?>" name="IDPARTAGE" id="idpartage">
                        <input type="hidden" value="<?= $w_user['IDUSER']; ?>" name="IDUSER" id="iduser">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input class="span4" value="<?= $w_user['PRENOMUSER'] ?>" name="PRENOMUSER" id="nom" size="16" type="text" placeholder="Nom">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span>
                            <input class="span4" value="<?= $w_user['NOMUSER'] ?>" name="NOMUSER" id="nom" size="16" type="text" placeholder="Prenom">
                        </div>
                        <textarea class="span6" name="CONTENUCOMMENTAIRE" id="commentaire"></textarea>
                        <div class="row">
                            <div class="span2">
                                <input type="submit" class="btn btn-inverse" value="Poster mon commentaire">
                            </div>
                        </div>
                    </form>
                </div>
        </section><!-- Close comments section-->

        </div><!--Close container row-->

        <!-- Blog Sidebar
        ================================================== -->
        <div class="span4 sidebar">

            <!--Search-->
            <section>
                <div class="input-append">
                    <form action="#">
                        <input id="appendedInputButton" size="16" type="text" placeholder="Search"><button class="btn" type="button"><i class="icon-search"></i></button>
                    </form>
                </div>
            </section>

            <!--Categories-->
            <h5 class="title-bg">Categories</h5>
            <ul class="post-category-list">
                <?php foreach($categories as $categorie) : ?>
                        <li ><a href="<?= $this->url("default_categorie", ["categorie" => strtolower($categorie->getCHEMIN())]); ?>"><?= $categorie->getLIBELLECATEGORIE(); ?></a></li>
                    <?php endforeach; ?>
            </ul>

            <!--Popular Posts-->
            <h5 class="title-bg">Partages les plus commentés</h5>
            <ul class="popular-posts">
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                    <em>Posted on 09/01/15</em>
                </li>

            </ul>
        </div>

    </div>

    </div> <!-- End Container -->
    <?php $this->stop('contenu') ?>

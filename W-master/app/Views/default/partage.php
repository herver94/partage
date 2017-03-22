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
                    <a href="#"><img src="<?= $this->assetUrl('img/partages/'. $partage->PHOTOPARTAGE  ); ?>" alt="Post Thumb"></a>

                    <div class="post-body">
                        <p><?= $partage->CONTENUPARTAGE; ?></p>
                    </div>

                    <div class="post-summary-footer">
                        <ul class="post-data">
                            <li><i class="icon-calendar"></i> <?= $partage->DATEPARTAGE; ?></li>
                            <li><i class="icon-user"></i> <a href="#"><?= $partage->PRENOMUSER; ?> <?= $partage->NOMUSER; ?></a></li>
                            <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </article>
            
        <!-- Post Comments
        ================================================== --> 
            <section class="comments">
                <h4 class="title-bg"><a name="comments"></a>5 Comments so far</h4>
               <ul>
                    <li>
                        <img src="img/user-avatar.jpg" alt="Image" />
                        <span class="comment-name">John Doe</span>
                        <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                        <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                        <!-- Reply -->
                        <ul>
                            <li>
                                <img src="img/user-avatar.jpg" alt="Image" />
                                <span class="comment-name">Jason Doe</span>
                                <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                                <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                                </li>
                             <li>
                                <img src="img/user-avatar.jpg" alt="Image" />
                                <span class="comment-name">Jason Doe</span>
                                <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                                <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                                </li>
                         </ul>
                    </li>
                    <li>
                        <img src="img/user-avatar.jpg" alt="Image" />
                        <span class="comment-name">John Doe</span>
                        <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                        <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                    </li>
                    <li>
                        <img src="img/user-avatar.jpg" alt="Image" />
                        <span class="comment-name">John Doe</span>
                        <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                        <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                    </li>
                    
               </ul>
            
                <!-- Comment Form -->
                <div class="comment-form-container">
                    <h6>Leave a Comment</h6>
                    <form action="#" id="comment-form">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input class="span4" id="prependedInput" size="16" type="text" placeholder="Name">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span>
                            <input class="span4" id="prependedInput" size="16" type="text" placeholder="Email Address">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-globe"></i></span>
                            <input class="span4" id="prependedInput" size="16" type="text" placeholder="Website URL">
                        </div>
                        <textarea class="span6"></textarea>
                        <div class="row">
                            <div class="span2">
                                <input type="submit" class="btn btn-inverse" value="Post My Comment">
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
            <h5 class="title-bg">Popular Posts</h5>
            <ul class="popular-posts">
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                    <em>Posted on 09/01/15</em>
                </li>
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Nulla iaculis mattis lorem, quis gravida nunc iaculis</a></h6>
                    <em>Posted on 09/01/15</em>
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                    <em>Posted on 09/01/15</em>
                </li>
            </ul>
        </div>

    </div>
    
</div> <!-- End Container -->
<?php $this->stop('contenu') ?>

   
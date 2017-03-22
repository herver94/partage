<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Accueil', 'current'=> $categorie]);
    use Model\Shortcut;
 $this->start('contenu');
 ?>
    <!-- Blog Content
    ================================================== -->
    <div class="row">

        <!-- Blog Posts
        ================================================== -->
        <div class="span8 blog">
            <?php foreach ($articles as $partage) : ?>
                <!-- Blog Post 1 -->
                <article class="clearfix">
                    <a href="<?= $this->url('default_partage', ['id' => $partage->IDPARTAGE, 'slug' => Shortcut::generateSlug($partage->TITREPARTAGE)]); ?>"><img src="<?= $this->assetUrl('img/partages/'. $partage->PHOTOPARTAGE  ); ?>" alt="Post Thumb" class="img-categorie"></a>
                    <h4 class="title-bg"><a href="<?= $this->url('default_partage', ['id' => $partage->IDPARTAGE, 'slug' => Shortcut::generateSlug($partage->TITREPARTAGE)]); ?>"><?= $partage->TITREPARTAGE; ?></a></h4>
                        <p class="p-partage"><?= Shortcut::getAccroche($partage->CONTENUPARTAGE); ?> </p>
                        <button class="btn btn-mini btn-inverse btn-profil" type="button" onclick="javascript:location.href='<?= $this->url('default_partage', ['id' => $partage->IDPARTAGE, 'slug' => Shortcut::generateSlug($partage->TITREPARTAGE)]); ?>'">Lire la suite...</button>
                        <div class="post-summary-footer">
                            <ul class="post-data-3">
                                <li><i class="icon-calendar"></i>  <?= $partage->DATEPARTAGE; ?></li>
                                <li><i class="icon-user"></i> <a href="#"><?= $partage->PRENOMUSER ; ?> <?= $partage->NOMUSER ; ?></a></li>
                                <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                            </ul>
                        </div>
                </article>

            <?php endforeach; ?>
            <!-- Pagination -->
            <div class="pagination">
               <!-- <ul>
                <li class="active"><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
                </ul>-->
            </div>
        </div>

        <!-- Blog Sidebar
        ================================================== -->
        <div class="span4 sidebar">

            <!--Search-->
            <section>
                <div class="input-append">
                    <form action="#">
                        <input id="appendedInputButton" size="16" type="text" placeholder="Recherche"><button class="btn" type="button"><i class="icon-search"></i></button>
                    </form>
                </div>
            </section>

            <!--Categories-->
           <h5 class="title-bg">Categories</h5>

            <ul class="post-category-list">
               <?php foreach ($categories as $categorie) : ?>
                    <li><a href="<?= $this->url("default_categorie", ["categorie" => strtolower($categorie->CHEMIN)]); ?>"><i class="icon-plus-sign"></i><?= $categorie->LIBELLECATEGORIE; ?></a></li>
                <?php endforeach; ?>
            </ul>


        </div>

    </div>

    </div> <!-- End Container -->
    <?php $this->stop('contenu') ?>

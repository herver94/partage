<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Moderation', 'current' => 'moderation']);
    use Model\Shortcut;
 $this->start('contenu');

 ?>

    <!-- Blog Content
    ================================================== -->
    <div class="row">

        <!-- Blog Posts
        ================================================== -->
        <div class="span8 blog">
            <?php foreach ($modpartages as $partage) : ?>
                <!-- Blog Post 1 -->
                <article class="clearfix">
                    <a href="<?= $this->url('admin_moderationarticle', ['id' => $partage->MODIDPARTAGE, 'slug' => Shortcut::generateSlug($partage->MODTITREPARTAGE)]); ?>">
                      <img src="<?= $this->assetUrl('img/partages/'. $partage->MODPHOTOPARTAGE  ); ?>" alt="Post Thumb" class="align-left"></a>
                    <h4 class="title-bg"><a href="<?= $this->url('default_partage', ['id' => $partage->MODIDPARTAGE, 'slug' => Shortcut::generateSlug($partage->MODTITREPARTAGE)]); ?>"><?= $partage->MODTITREPARTAGE; ?></a></h4>
                        <p><?= Shortcut::getAccroche($partage->MODCONTENUPARTAGE); ?> </p>
                        <button class="btn btn-mini btn-inverse btn-profil" type="button" onclick="javascript:location.href='<?= $this->url('admin_moderationarticle', ['id' => $partage->MODIDPARTAGE, 'slug' => Shortcut::generateSlug($partage->MODTITREPARTAGE)]); ?>'">MODIFIER/VALIDER  le partage</button>

                        <div class="post-summary-footer">
                            <ul class="post-data-3">
                                <li><i class="icon-calendar"></i>  <?= $partage->MODDATEPARTAGE; ?></li>
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





        </div>

    </div>

    </div> <!-- End Container -->
    <?php $this->stop('contenu') ?>

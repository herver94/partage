<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Partagez', 'current' => 'partagez']);
    use Model\Shortcut;
?>
<?php $this->start('contenu');
//print_r($samepartage);

 ?>



<div class="container main-container">

    <div class="row-fluid"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <h2 class="title-bg">Ecrire votre Partage ici :</h2>
            <p class="instruction">Veuillez remplir les champs suivant en appliquant les instructions.</p>

            <div class="hidden" class="alert alert-success">
                Well done! You successfully read this important alert message.
            </div>

            <form action="#" method="post" enctype="multipart/form-data" id="message-form">

                <label for="MODTITREPARTAGE">Titre</label>
                <input type="text" class="span7" name="MODTITREPARTAGE" placeholder="Le titre de votre histoire ici"/>
                <div class="input-prepend">
                  <input type="hidden" >
                  <label for="categorie">Selectionnez une catégorie</label>
                </div>

                <div class="input-prepend">
                    <select name="MODIDCATEGORIE" id="categorie" class="span4">
                      <option value="1">Expériences de vie</option>
                      <option value="2">Anecdotes</option>
                      <option value="3">Avis sur la société actuelle</option>
                      <option value="4">Conseils aux futures générations</option>
                    </select>
                </div><br>

                <div class="row-fluid">
                      <textarea name="MODCONTENUPARTAGE"></textarea><br/>
                      <div class="input-prepend">
                        <label>Ajouter une image</label>
                          <input type="file" name="MODPHOTOPARTAGE" class="dropify" data-max-file-size="2M" />
                      </div>

                  <div>
                      <input type="submit" class="btn btn-inverse btn-profil" value="Envoyer le partage"/>
                  </div>
                </div>
            </form>
        </div>

        <!-- Sidebar
        ================================================== -->
        <div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->
            <h5 class="title-bg">Vos precendents articles</h5>
            <?php foreach ($samepartage as $partage) : ?>
            <article>
                <h3 class="title-bg"><a href="<?= $this->url('default_partage', ['id' => $partage->IDPARTAGE, 'slug' => Shortcut::generateSlug($partage->TITREPARTAGE)]); ?>"><?= $partage->TITREPARTAGE; ?></a></h3>
                <div class="post-content">

                    <a href="<?= $this->url('default_partage', ['id' => $partage->IDPARTAGE, 'slug' => Shortcut::generateSlug($partage->TITREPARTAGE)]); ?>"><img src="<?= $this->assetUrl('img/partages/'. $partage->PHOTOPARTAGE  ); ?>" alt="Illustration"></a>


                    <div class="post-body">
                              <p><?= Shortcut::getAccroche($partage->CONTENUPARTAGE); ?> </p>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div><!-- End sidebar column -->

    </div><!-- End container row -->

    </div> <!-- End Container -->
</div>
    <script>
        CKEDITOR.replace( 'MODCONTENUPARTAGE' );
        $(document).ready(function () {
                $('.dropify').dropify({
                    messages: {
                        default: 'Glissez-d&eacute;posez un fichier ou cliquez ici',
                        replace: 'Glissez-d&eacute;posez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'D&eacute;sol&eacute;, le fichier est trop volumineux'
                    }
                });


      });
    </script>

<?php $this->stop('contenu') ?>

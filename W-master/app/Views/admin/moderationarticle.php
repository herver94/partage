<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Moderation', 'current' => 'moderation']);
    //use Model\Shortcut;
?>
<?php $this->start('contenu');
 ?>



<body>



    <div class="container main-container">



    <div class="row"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <h2 class="title-bg">Faites les modifications necessaires ici</h2>





            <form action="#" method="post" id="message-form">

                    <span class="add-on"></i></span>
                    <textarea value="SALUT"  class="span7" name="TITREPARTAGE" ><?= $modpartage->MODTITREPARTAGE ; ?></textarea>
                    <img src="<?= $this->assetUrl('img/partages/'. $modpartage->MODPHOTOPARTAGE  ); ?>" alt="Illustration" class="align-left">
                    <div class="input-prepend">
                        <span class="add-on"></span>
                        <input type="hidden" >
                        <select name="IDCATEGORIE" id="categorie" class="span4">
                          <option value="<?=$modpartage->IDCATEGORIE?>"><?=$mcategorie->LIBELLECATEGORIE?></option>
                          <option value="1">Expériences de vie</option>
                          <option value="2">
Anecdotes</option>
                          <option value="3">Avis sur la société actuelle</option>
                          <option value="4">Conseils aux futures générations</option>
                        </select>
                    </div><br>

                          <textarea  name="CONTENUPARTAGE"><?= $modpartage->MODCONTENUPARTAGE ; ?></textarea><br/>

                <div class="row">
                    <div class="span2">
                        <input type="submit" class="btn btn-inverse btn-profil " value="Accepter le partage">
                    </div>
                </div>
            </form>

        </div> <!--End page content column-->

        <!-- Sidebar
        ================================================== -->

    </div><!-- End container row -->

    </div> <!-- End Container -->
</div>
    <script>
        CKEDITOR.replace( 'CONTENUPARTAGE' );
    </script>

<?php $this->stop('contenu') ?>

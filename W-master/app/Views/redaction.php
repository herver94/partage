<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Accueil', 'current' => 'Accueil']);
    //use Model\Shortcut;
?>
<?php $this->start('contenu') ?>




<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>

    <div class="container main-container">


    ================================================== -->
    <div class="row"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <h2>Ecrire votre anecdote ici</h2>
            <p>Veuillez remplir les champs suivant en appliquant les instructions .</p>

            <div class="hidden" class="alert alert-success">
                Well done! You successfully read this important alert message.
            </div>

            <form action="#" method="post" id="message-form">

                    <span class="add-on"><i class="icon-user"></i></span>
                    <textarea  class="span7" name="TITREPARTAGE" placeholder="Le titre de votre histoire ici"/></textarea>

                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span7" id="prependedInput" size="16" type="text" placeholder="">
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-globe"></i></span>
                    <input class="span7" id="prependedInput" size="16" type="text" placeholder="Website URL">
                </div>

                          <textarea name="CONTENUPARTAGE"></textarea>

                <div class="row">
                    <div class="span2">
                        <input type="submit" class="btn btn-inverse" value="Send Message">
                    </div>
                </div>
            </form>

        </div> <!--End page content column-->

        <!-- Sidebar
        ================================================== -->
        <div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->
            <h5 class="title-bg">Vos precendents articles</h5>
            <address>
            <strong>Piccolo</strong><br>
            123 Main St, Suite 600<br>
            San Francisco, CA 94107<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

            <address>
            <strong>Jimmy Doe</strong><br>
            <a href="mailto:#">first.last@gmail.com</a>
            </address>

            <h5 class="title-bg">Map Us</h5>
            <img src="img/location-map.jpg" alt="map">

        </div><!-- End sidebar column -->

    </div><!-- End container row -->

    </div> <!-- End Container -->
</div>
    <script>
        CKEDITOR.replace( 'CONTENUPARTAGE' );
    </script>

<?php $this->stop('contenu') ?>

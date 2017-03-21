<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Contact', 'current' => 'contact']);
    use Model\Shortcut;
?>
<?php $this->start('contenu') ?>

     
    <!-- Page Content
    ================================================== --> 
    <div class="row-fluid"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <h2>Contact</h2>
            <p>N'hésitez pas à nous contacter pour toutes demandes d'informations.<br/>Nous vous y réponderons dans les plus brefs délais.<br/>
            Bien cordialement, l'équipe de Part Âge !</p>

            <div class="alert alert-success">
                Votre message à bien été envoyé ! 
            </div>

            <form methode="post" action="#" id="contact-form">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Votre Nom">
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Votre Adresse Email">
                </div>
                <div class="form-group">
                        <select id="subject" name="subject" class="form-control" required="required">
                            <option value="na" selected="">Objet :</option>
                            <option value="service">Inscription</option>
                            <option value="suggestions">Connexion</option>
                            <option value="product">Partage</option>
                            <option value="product">Divers</option>
                        </select>
                </div>
                <textarea class="span6"></textarea>
                <div class="row">
<!--                    <div class="span2">-->
                        <input type="submit" class="btn btn-inverse btn-profil" value="Send Message">
<!--                    </div>-->
                </div>
            </form>

        </div> <!--End page content column-->

        <!-- Sidebar
        ================================================== --> 
        <div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->
            <h5 class="title-bg">Our Location</h5>
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

</div>
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
<?php $this->stop('contenu') ?> 
 
</body>
</html>

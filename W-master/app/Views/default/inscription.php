
<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Inscription', 'current' => 'inscription']);
    //use Model\Shortcut;
?>
<?php $this->start('css'); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.1/css/dropify.css" />
<?php $this->stop('css'); ?>

<?php $this->start('contenu'); ?>

    <!-- Page Content
    ================================================== -->
    <div class="row"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <h2>Inscription</h2>
            <p>Inscrivez vous simplement, rapidement et gratuitement pour partager et échanger avec les autres. Recevoir nos newsletters pour être toujours mieux informés
							Commenter les articles et discuter. Participer à nos jeux concours

            <div class="alert alert-success">
                Well done! You successfully read this important alert message.
            </div>

						<form action="#" method="post" id="contact-form" id="inscriptionForm">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span7" name="NOMUSER" id="nom" size="16" type="text" placeholder="Nom">
                </div>
								<div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span7" name="PRENOMUSER" id="prenom" size="16" type="text" placeholder="Prenom">
                </div>
								<div class="input-prepend">
                    <span class="add-on"><i class="icon-calendar"></i></span>
                    <input  class="span7" name="DATEDENAISSANCEUSER" id="datedenaissance" size="16" type="date" placeholder="Date de naissance">
                </div>
								<div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input type="hidden" >
										<select name="SEXEUSER" class="span4">
											<option value="Homme">Homme</option>
                      <option value="Femme">Femme</option>
										</select>
                </div><br>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span7" name="EMAILUSER" id="email" size="16" type="text" placeholder="Email">
                </div>
								<div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span7" name="CPUSER" id="codepostal" size="16" type="text" placeholder="Code postal">
                </div>
								<div class="input-prepend">
                    <span class="add-on"><i class="icon-warning-sign"></i></span>
                    <input class="span7" name="MOTDEPASSEUSER" id="mdp" size="16" type="text" placeholder="Mode de passe">
                </div>
								<div class="input-prepend">
                    <input type="file" name="PHOTOUSER" class="dropify" data-max-file-size="2M" />
                </div>

                <div class="row">
                    <div class="span2">
                        <input type="submit" class="btn btn-inverse" value="Inscription">
                    </div>
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

    </div> <!-- End Container -->



	    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>

<?php $this->stop('contenu'); ?>

<?php $this->start('script') ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.1/js/dropify.js"></script>
      <!-- wysuhtml5 Plugin JavaScript -->
      <script>
      $(document).ready(function () {

  		// -- Dropify
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
<?php $this->stop('script') ?>

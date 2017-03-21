
<?php
    # Layout utilisé pour la vue

    $this->layout('layout', ['title' => 'Inscription', 'current' => 'inscription']);
    //use Model\Shortcut;
?>

<?php $this->start('contenu'); ?>


    <!-- Page Content
    ================================================== -->
    <div class="row-fluid centrer"><!--Container row-->

        <div class="span8 contact inscription"><!--Begin page content column-->


            <h2>Inscription</h2>
                <p>Inscrivez vous rapidement et gratuitement sur Part Âge, afin de pouvoir partager une expérience de vie, une anecdote,
                des conseils aux futurs générations, votre avis sur la société actuelle... Et également partager vos avis en laissant des commentaires sur les partages des autres membres. </p>
            <div class="alert alert-success">
                Votre inscription s'est déroulée avec succès !
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
                        <input type="submit" class="btn btn-inverse btn-profil" value="Inscription">
                    </div>
                </div>
            </form>

        </div> <!--End page content column-->

    </div><!-- End container row -->

    </div> <!-- End Container -->




    <!-- Footer Area
        ================================================== -->

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

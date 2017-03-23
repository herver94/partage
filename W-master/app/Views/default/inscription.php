
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

            <h2 class="title-bg otto">Inscription</h2>

              <p class="quote-text">Inscrivez vous rapidement et gratuitement sur Part Âge, afin de pouvoir partager une expérience de vie, une anecdote,des conseils aux futurs générations, votre avis sur la société actuelle... Et également partager vos avis en laissant des commentaires sur les partages des autres membres.<br><br></p>




              <form action="#" method="post" id="contact-form" id="inscriptionForm">

                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span7 champ" name="NOMUSER" id="nom" size="16" type="text" placeholder="Nom"/>

                </div>


								<div class="input-prepend" >

                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span7 champ" name="PRENOMUSER" id="prenom" size="16" type="text" placeholder="Prenom">
                </div>
                <div id="erreurnom" style="display : none;">
                <p>Veuillez renseigner votre nom !</p>
                </div>
								<div class="input-prepend">
                    <span class="add-on"><i class="icon-calendar"></i></span>
                    <input  class="span7 " name="DATEDENAISSANCEUSER" id="datedenaissance" size="16" type="date" placeholder="Date de naissance">
                </div>
                <div id="erreurprenom" style="display : none;">
                <p>Veuillez renseigner votre nom !</p>
                </div>
								<div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input type="hidden" >
				        <select name="SEXEUSER" id="sexe" class="span4">
				            <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
				        </select>
                </div><br>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span7 " name="EMAILUSER" id="email" size="16" type="text" placeholder="Email">
                </div>
                <div id="erreuremail" style="display : none;">
                <p>Veuillez renseigner votre nom !</p>
                </div>
								<div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span7" name="CPUSER" id="codepostal" size="16" type="text" placeholder="Code postal">
                </div>
                <div id="erreurcodepostal" style="display : none;">
                <p>Veuillez renseigner votre nom !</p>
                </div>
								<div class="input-prepend">
                    <span class="add-on"><i class="icon-warning-sign"></i></span>
                    <input class="span7 champ" name="MOTDEPASSEUSER" id="mdp" size="16" type="password" placeholder="Mot de passe">
                </div>
								<div class="input-prepend">
                    <span class="add-on"><i class="icon-warning-sign"></i></span>
                      <input class="span7 champ"  id="confirmation" size="16" type="password" placeholder="Confirmation du mot de passe">
                </div>

                <div id="erreurmdp" style="display : block;">
        <p>Les mots de passe ne sont pas identiques!</p>
    </div>
								<div class="input-prepend">

                  <label>Ajouter une image (avatar ou photo)</label>
                    <input type="file" name="PHOTOUSER" class="dropify" data-max-file-size="2M" />
                </div>

                <div class="row">
                    <div class="span2">

                        <input type="submit" id="envoi" class="btn btn-inverse btn-profil" value="Inscription">

                    </div>
                </div>
        </form>

        </div> <!--End page content column-->

    </div><!-- End container row -->

    </div> <!-- End Container -->
<script>
    $(document).ready(function(){
      function validateEmail(email){
      				var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
      				var valid = emailReg.test(email);

      				if(!valid) {
      			        return false;
      			    } else {
      			    	return true;
      			    }
      			}

      			// -------------------------- VALIDATION NEWSLETTER -------------------------- //

      			// -- V�rification de jQuery


      var    $nom = $('#nom'),
             $prenom = $('#prenom'),
             $mdp = $('#mdp'),
             $genre = $('#sexe'),
             $confirmation = $('#confirmation'),
             $email = $('#email'),
             $codepostal = $('#codepostal'),
             $envoi = $('#envoi'),
             $reset = $('#rafraichir'),
             $nomerreur = $('#erreurnom'),
             $champ = $('.champ');

            // $messagerror = document.createElement('div');

            $('.title-bg otto');


            $champ.keyup(function($champ){
                  var  $mErreur =  $(this).parent();
                  var $mErreurspe = this['placeholder'];
                  console.log($(".erreur"+$mErreurspe));
                if($(this).val().length <   3  ){   // si la chaîne de caractères est inférieure à 5
               $($mErreur).append('<div class="erreur'+$mErreurspe+'" style="font-size :10px !important;">Veuillez renseigner votre ' + $mErreurspe +'</div>') ;
                 }

                 else{
                     $('.erreur'+$mErreurspe).css({ // si tout est bon, on le rend vert
                   display : 'none',

               });
                 }
            });

        $confirmation.blur(function(){
            if($(this).val() != $mdp.val()){
                $erreur1.css('display', 'block'); // si la confirmation est différente du mot de passe
                $(this).css({ // on rend le champ rouge
         	        borderColor : 'red',
            	color : 'red'
                });
            }
            else{
    	    $(this).css({ // si tout est bon, on le rend vert
    	        borderColor : 'green',
    	        color : 'green'
    	    });
            }
        });


       $envoi.click(function(e){
            e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

            // puis on lance la fonction de vérification sur tous les champs :
           verifier($champ);
        //    verifier($mdp);
          //  verifier($confirmation);
          //  verifier($email);
        });

        $reset.click(function(){
            $champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS
                borderColor : '#ccc',
        	    color : '#555'
            });
            $erreur.css('display', 'none'); // on prend soin de cacher le message d'erreur
        });

  function verifier(champ){

                            var  $mErreur =  champ.parent();

                            var $mErreurspe = champ['0'];
                            console.log(this);
                          if(champ.val().length <   3  ){   // si la chaîne de caractères est inférieure à 5
                         $($mErreur).prepend('<div class="erreur" style="font-size :10px !important;">Veuillez renseigner ce champ </div>') ;
                           }

                           else{
                               $('.erreur'+$mErreurspe).css({ // si tout est bon, on le rend vert
                             display : 'none',

                         });
                           }


        };





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



	    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>


<?php $this->stop('contenu'); ?>

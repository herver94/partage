<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Contact', 'current' => 'contact']);
    use Model\Shortcut;

if($_POST){
  extract($_POST);
  // fonction qui permet de mettre toutes les valeurs d'un array
  //dans des variables nommées en fonction des indices
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $sujet = $_POST['sujet'];
  $message = $_POST['message'];

  //création de l'entête
  $header = "From: $email \r\n";
  $header .= "Reply-To: $email \r\n";
  $header .= "MIME-Version: 1.0 \r\n";
  $header .= "Content-type: text/html; charset=iso-8859-1 \r\n";
  $header .= "X-Mailer: PHP/" . phpversion();

  //mise en forme du contenu de l'email
  $contenu = "<h1> $sujet</h1>";
  $contenu .= "<ul>";
  $contenu .= "<li>Nom : $nom</li>";
  $contenu .= "<li>Email : $email</li>";
  $contenu .= "<li>Date : " . date("d/m/Y") . "</li>";
  $contenu .= "</ul>";
  $contenu .= "<hr />";
  $contenu .= "<p> $message </p>";

  // choix du destinataire en fonction du sujet
  $destinataire;
  switch($sujet){
    case'inscription':
    $destinataire = 'contact@part-age.net';
    break;
    case'connexion':
    $destinataire = 'contact@part-age.net';
    break;
    case'partage':
    $destinataire = 'contact@part-age.net';
    break;
    case'divers':
    $destinataire = 'contact@part-age.net';
    break;
    default :
    $destinataire = 'contact@part-age.net';

}

  mail($destinataire, $sujet, $contenu, $header);
  /*fonction qui attend 4 arguments :
  -1 email du destinataire
  -2 sujet (objet)
  -3 le contenu du mail
  -4 entête du mail
  */
}

?>
<?php $this->start('contenu') ?>


    <!-- Page Content
    ================================================== -->
    <div class="row-fluid"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <h2 class="title-bg otto">Contact</h2>
            <p>N'hésitez pas à nous contacter pour toutes demandes d'informations. Nous vous y réponderons dans les plus brefs délais.<br/>
            Bien cordialement, l'équipe de Part Âge !</p>

            <div class="alert alert-warning" id="erreur">
              <i class="fa fa-frown-o" aria-hidden="true"></i>
              <span>Vous n'avez pas rempli correctement les champs du formulaire !</span>
            </div>
            <div class="alert alert-success" id="cbon" >
              <i class="fa fa-thumbs-up" aria-hidden="true"></i>
              <span>Votre message à bien été envoyé !</span>
            </div>

            <form method="post" action="" id="contact-form">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span4 champ" name="nom" id="nom" size="16" type="text" placeholder="Votre Nom">
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span4 champ" name="email" id="email" size="16" type="text" placeholder="Votre Adresse Email">
                </div>
                <div class="form-group">
                        <select id="sujet" name="sujet" class="form-control champ" required="required">
                            <option value="objet" selected="">Objet :</option>
                            <option value="inscription">Inscription</option>
                            <option value="connexion">Connexion</option>
                            <option value="partage">Partage</option>
                            <option value="divers">Divers</option>
                        </select>
                </div>
                <textarea id="message" class="span6 champ" name="message" placeholder="Votre message..." rows="60"></textarea>
                <div class="row">
                    <div class="span2">
                    <input type="submit" id="envoi" class="btn btn-inverse btn-profil" value="Envoyer votre message">
                    </div>
                </div>
            </form>
        </div> <!--End page content column-->

        <!-- Sidebar
        ================================================== -->
        <div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->
            <h5 class="title-bg otto">Adresse</h5>
            <address>
            <strong>Part Âge</strong><br>
            157 Boulevard Macdonald<br>
            75019 Paris<br>
            <abbr title="Phone">Tel :</abbr>01 51 52 53 54<br>
            <a href="mailto:contact@part-age.net">contact@part-age.net</a>
            </address>
        </div><!-- End sidebar column -->

    </div><!-- End container row -->
    </div>
<script>
$(document).ready(function(){

    var $nom = $('#nom'),
        $mail = $('#mail'),
        $sujet = $('#sujet'),
        $message = $('#message'),
        $envoi = $('#envoi'),
        $erreur = $('#erreur'),
        $cbon = $('#cbon'),
        $champ = $('.champ');
    $erreur.css('display', 'none');
    $cbon.css('display', 'none');

    $champ.keyup(function(){
        if($(this).val().length < 3){ // si la chaîne de caractères est inférieure à 5
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

    $envoi.click(function(event){
        event.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

        // puis on lance la fonction de vérification sur tous les champs :
       verifier($nom);
       verifier($message);
       verifier($mail);
    });


    function verifier(champ){
        if(champ.val() == ""){ // si le champ est vide
    	    $erreur.css('display', 'block'); // on affiche le message d'erreur
            champ.css({ // on rend le champ rouge
    	        borderColor : 'red',
    	        color : 'red'
    	    });
        }
        else{
          $cbon.css('display', 'block');
        }
    }

});

</script>
<?php $this->stop('contenu') ?>

    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Haut de page</div>


<?php $this->start('contenu') ?>


    <!-- Page Content
    ================================================== -->
    <div class="row-fluid"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <h2 class="title-bg otto">Contact</h2>
            <p>N'hésitez pas à nous contacter pour toutes demandes d'informations. Nous vous y réponderons dans les plus brefs délais.<br/>
            Bien cordialement, l'équipe de Part Âge !</p>

            <div class="alert alert-success" id="cbon" style="display:none;">
              <i class="fa fa-thumbs-up" ></i>
              <span>Votre message à bien été envoyé !</span>
            </div>


            <form method="post" action="" id="contact">
                <div class="input">
                  <div class="error">Ce champs est requis</div>
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span4" name="nom" id="contact_name" size="25" type="text" placeholder="Votre Nom">
                </div>
                <div class="input">
                    <div class="error">Un email valide est requis</div>
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span4" name="email" id="contact_email" size="25" type="text" placeholder="Votre Adresse Email">
                </div>
                <div class="form-group">
                        <select id="sujet" name="sujet" class="form-control" required="required">
                            <option value="objet" selected="">Objet :</option>
                            <option value="inscription">Inscription</option>
                            <option value="connexion">Connexion</option>
                            <option value="partage">Partage</option>
                            <option value="divers">Divers</option>
                        </select>
                </div>
                <div class="error">Veuillez préciser votre demande</div>
                <textarea id="contact_message" class="span6" name="message" placeholder="Votre message..." cols="30" rows="10"></textarea>
                <div class="row">
                    <div class="span2" id="contact_submit">
                    <button type="submit" class="btn btn-inverse bt_contact">Envoyer</button>

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
$(document).ready(function() {
  $('#contact_name').on('input', function() {
    var input=$(this);
    var is_name=input.val();
    if(is_name >3){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });

  $('#contact_email').on('input', function() {
    var input=$(this);
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var is_email=re.test(input.val());
    if(is_email){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });


  $('#contact_message').keyup(function(event) {
    var input=$(this);
    var message=$(this).val();
    console.log(message);
    if(message > 10){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });

  $("#contact_submit button").click(function(event){
    var form_data=$("#contact").serializeArray();
    var error_free=true;
    for (var input in form_data){
      var element=$("#contact_"+form_data[input]['name']);
      var valid=element.hasClass("valid");
      var error_element=$("div", element.parent());
      if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
      else{error_element.removeClass("error_show").addClass("error");}
    }
    if (!error_free){
      event.preventDefault();
    }
    else{
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
        $destinataire = 'contact@part-age.net';

        mail($destinataire, $sujet, $contenu, $header);
        /*fonction qui attend 4 arguments :
        -1 email du destinataire
        -2 sujet (objet)
        -3 le contenu du mail
        -4 entête du mail
        */
      }

      ?>
    }
  });



});
</script>
<?php $this->stop('contenu') ?>

    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Haut de page</div>

<?php $this->layout('layout', ['title' => 'Perdu ?','current' => 'inscription']) ?>

<?php $this->start('contenu'); ?>
<h1>404. Perdu ?</h1>
<img src="<?= $this->assetUrl('img/perdu.jpg'); ?>"
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
			console.log('jQuery is Ready !');

			// -- 1. Ecoute le Formulaire Newsletter pour savoir a quel moment il est soumis.
			$('#newsletterForm').on('submit', function(e) {

				// -- Permet  de stopper la redirection du Submit
				e.preventDefault();
				console.log('newsletterForm is Submitted !');

				// -- 2. Je v�rifie si l'adresse email est correct ...
				var email = $('#newsletterForm > input');

				// -- 3. R�initialisation des Erreurs
				$('#newsletterForm .alert').remove();

				if(validateEmail(email.val())) {

					$.ajax({ cache : false,
						url: "<?= $this->url('default_newsletteradd'); ?>",
						type: "POST",
						data: { EMAILNEWSLETTER : email.val() }
					}).done(function(data) {

						if(data.response) {
							$('#newsletterForm').replaceWith($('<div class="alert alert-success"><strong><i class="fa fa-thumbs-up" aria-hidden="true"></i><br>Merci !</strong><br>Votre inscription est valide.</div>'));
							email.val('');
						} else {
							$('<div class="alert alert-danger"><strong><i class="fa fa-frown-o" aria-hidden="true"></i><br>D&eacute;sol&eacute; !</strong><br>Vous &egrave;tes d&eacute;j&agrave; inscrit.</div>').prependTo($('#newsletterForm'));
						}

					});

				} else {
					$('<div class="alert alert-warning"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></br>Attention !</strong><br>V&eacute;rifiez le format de votre email.</div>').prependTo($('#newsletterForm'));
				}

			});
		});
    </script>

<?php $this->stop('contenu'); ?>

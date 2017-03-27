<?php

		$this->layout('layout', ['title' => 'Partage | Modifier mon Profil ', 'current' => 'profil']);

		$id= $w_user['IDUSER'];
		$nom = $w_user['PRENOMUSER'];
		$prenom = $w_user['NOMUSER'];
    $inscription = $w_user['DATEINSCRIPTION'];
		$date =  strftime('%d-%m-%Y',strtotime($w_user['DATEDENAISSANCEUSER']));
		$mail = $w_user['EMAILUSER'];
		$cp = $w_user['CPUSER'];
		$mdp = $w_user['MOTDEPASSEUSER'];
		$photo = $w_user['PHOTOUSER'];
		$genre = $w_user['SEXEUSER'];

		//print_r($w_user);

		$this->start('contenu');


?>

    <!-- Page Content

    ================================================== -->
    <div class="row-fluid">

        <!-- Gallery Items

        ================================================== -->

        <div class="span12 gallery-single">
            <div class="row-fluid">

                <div class="span4">

									<img src="<?php if(empty($photo)){
										if ($genre == 'Homme'){
											echo $this->assetUrl('/img/partages/homme.jpg');
									}
										else{
											echo  $this->assetUrl('/img/partages/femme.jpg');
										}}
										else{ 	echo $this->assetUrl("/img/profil/".$photo );

										}

									?>" class="align-left thumbnail" alt="avatar">
                </div>

                  <div class="span8 contact inscription">
                    <h2 class="otto"><?= $w_user['PRENOMUSER'].' '.$w_user['NOMUSER']; ?></h2>

								<form action="#" method="post" id="modifForm">

											<div class="input-prepend">
													<span class="add-on"><i class="icon-user"></i></span>
													<input class="span7 champ" name="NOMUSER" id="nom" size="16" type="text" value="<?= $nom ?>">
											</div>
											<div class="input-prepend">
													<span class="add-on"><i class="icon-user"></i></span>
													<input class="span7 champ" name="PRENOMUSER" id="prenom" size="16" type="text" value="<?= $prenom ?>">
											</div>
											<div class="input-prepend">
													<span class="add-on"><i class="icon-calendar"></i></span>
													<input  class="span7 " name="DATEDENAISSANCEUSER" id="datedenaissance" size="16" type="text" value="<?= $date ?>">
											</div>
											<div class="input-prepend">
													<span class="add-on"><i class="icon-user"></i></span>
											<select name="SEXEUSER" id="sexe" class="span4">
													<option value="Homme">Homme</option>
													<option value="Femme">Femme</option>
											</select>
											</div><br>
											<div class="input-prepend">
													<span class="add-on"><i class="icon-envelope"></i></span>
													<input class="span7 " name="EMAILUSER" id="email" size="16" type="text" value="<?= $mail ?>">
											</div>
											<div class="input-prepend">
													<span class="add-on"><i class="icon-envelope"></i></span>
													<input class="span7" name="CPUSER" id="codepostal" size="16" type="text" value="<?= $cp ?>">
											</div>
											<div class="input-prepend">
													<span class="add-on"><i class="icon-warning-sign"></i></span>
													<input class="span7 champ" name="MOTDEPASSEUSER" id="mdp" size="16" type="password" value="<?= $mdp ?>">
											</div>


											<div class="input-prepend">
												<label>Changer de photo de profil</label>
													<input type="file" name="PHOTOUSER" class="dropify" data-max-file-size="2M" />
											</div>

											<div class="row">
													<div class="span4">

															<input type="submit" id="envoi" class="btn btn-inverse btn-profil" value="Modifier">

													</div>
											</div>

									</form>

                </div>

            </div>

        </div><!-- End gallery-single-->

    </div><!-- End container row -->


</div> <!-- End Container -->

    <!-- Footer Area -->

<?php $this->stop('contenu'); ?>

<?php

		$this->layout('layout', ['title' => 'Partage | Profil ', 'current' => '']);

	$nom = $w_user['PRENOMUSER'];
		$prenom= $w_user['NOMUSER'];
		$date= $w_user['DATEDENAISSANCEUSER'];
		$mdp= $w_user['MOTDEPASSEUSER'];
		$photo= $w_user['PHOTOUSER'];
		$genre = $w_user['SEXEUSER'];
		$this->start('contenu');

?>

    <!-- Page Content

    ================================================== -->
    <div class="row">

​

        <!-- Gallery Items

        ================================================== -->




        <div class="span12 gallery-single">

​

            <div class="row">
                <div class="span6">
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

                <div class="span6">

                    <h2><?= $w_user['PRENOMUSER'].' '.$w_user['NOMUSER']; ?></h2>



                    <p class="lead">For an international ad campaign. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

​

                    <ul class="project-info">

                        <li><h6>Date:</h6> 09/12/15</li>

                        <li><h6>Client:</h6> John Doe, Inc.</li>

                        <li><h6>Services:</h6> Design, Illustration</li>

                        <li><h6>Art Director:</h6> Jane Doe</li>

                        <li><h6>Designer:</h6> Jimmy Doe</li>

                    </ul>



                    <button class="btn btn-inverse pull-left btn-profil" type="button">Écrire un texte à partager</button>

                    <button class="btn btn-inverse pull-left btn-profil" type="button">Modifier mon profil</button>

                    <button class="btn btn-inverse pull-left btn-profil" type="button">Déconnexion</button>


                </div>

            </div>

​

        </div><!-- End gallery-single-->

​

    </div><!-- End container row -->


    </div> <!-- End Container -->


​

    <!-- Footer Area -->

<?php $this->stop('contenu'); ?>

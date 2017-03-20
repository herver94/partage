<?php
		$this->layout('layout', ['title' => 'Partage | Profil ', 'current' => '']);
		//use Model\Shortcut;

		$this->start('contenu');
?>


    <!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery-single">

            <div class="row">
                <div class="span6">
                    <img src="<?= $this->assetUrl('/img/partages/homme.jpg'); ?>" width="50%" height="50%" class="align-left thumbnail" alt="avatar">
                </div>
                <div class="span6">
                    <h2><?= $loggedUser->PRENOMUSER.' '.$loggedUser->NOMUSER; ?></h2>
                    <p class="lead">For an international ad campaign. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

                    <ul class="project-info">
                        <li><h6>Date:</h6> 09/12/15</li>
                        <li><h6>Client:</h6> John Doe, Inc.</li>
                        <li><h6>Services:</h6> Design, Illustration</li>
                        <li><h6>Art Director:</h6> Jane Doe</li>
                        <li><h6>Designer:</h6> Jimmy Doe</li>
                    </ul>

                    <button class="btn btn-inverse pull-left" type="button">Déconnexion</button>
                    <button class="btn btn-inverse pull-left" type="button">Modifier mon profil</button>
                </div>
            </div>

        </div><!-- End gallery-single-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area -->
<?php $this->stop('contenu'); ?>
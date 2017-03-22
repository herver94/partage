<?php

		$this->layout('layout', ['title' => 'Partage | Profil ', 'current' => 'profil']);

	    $nom = $w_user['PRENOMUSER'];
		$prenom = $w_user['NOMUSER'];
        $inscription = $w_user['DATEINSCRIPTION'];
		$date =  strftime('%d-%m-%Y',strtotime($w_user['DATEDENAISSANCEUSER']));
		$mdp = $w_user['MOTDEPASSEUSER'];
		$photo = $w_user['PHOTOUSER'];
		$genre = $w_user['SEXEUSER'];
        $id = $w_user['IDUSER'];
		$this->start('contenu');


?>
<script type="text/javascript">
            function getConfirmation(){
               var retVal = confirm("Etes vous certain ?");
               if( retVal == true ){
                  return true;
               }
               else{
                  return false;
               }
            }
</script>

    <!-- Page Content

    ================================================== -->
    <div class="row-fluid">

        <!-- Gallery Items

        ================================================== -->

        <div class="span12 gallery-single">
            <div class="row-fluid">

                <div class="span5">

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
                    <h2 class="otto"><?= $w_user['PRENOMUSER'].' '.$w_user['NOMUSER']; ?></h2>

                        <ul class="project-info">

                            <li><h6>Membre depuis le :</h6><?= $w_user['DATEINSCRIPTION']; ?></li>
                            <li><h6>Date de naissance:</h6> <?= $date; ?></li>
                            <li><h6>Sexe:</h6> <?= $w_user['SEXEUSER']; ?></li>
                            <li><h6>Email:</h6> <?= $w_user['EMAILUSER']; ?></li>
                            <li><h6>Code Postal:</h6> <?= $w_user['CPUSER']; ?></li>

                        </ul>

                    <button class="btn btn-inverse pull-left btn-profil" type="button">Écrire un texte<br>à partager</button>
                    <button class="btn btn-inverse pull-left btn-profil" type="button">Modifier mon profil</button>
                    <a class="btn btn-inverse pull-left btn-profil" type="button" onclick="getConfirmation();" href="<?= $this->url('default_deleteprofil', ['id'=>$id]); ?>">Supprimer mon profil</a>


                </div>

            </div>

        </div><!-- End gallery-single-->

    </div><!-- End container row -->


</div> <!-- End Container -->

    <!-- Footer Area -->

<?php $this->stop('contenu'); ?>

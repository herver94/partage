<?php
namespace Controller;

use \W\Controller\Controller;
use Model\DBFactory;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;
use \Model\Shortcut;

class AdminController extends Controller{
	public function gestionDesMembres(){

  DBFactory::start();
	$membres = \ORM::for_table('view_partage')->find_result_set();
		//$this->allowTo('admin');
 $this->show('admin/gestionDesMembres', ['membres' => $membres ]);


	}

  public function moderation() {
		$this->allowTo('admin');

			# Connexion a la BDD
			DBFactory::start();

			# Récupérations des Articles de la Catégorie
			$modpartages  = \ORM::for_table('modpartages')->find_result_set();




			# Transmettre à la Vue
			$this->show('admin/modpartages', [ 'modpartages' => $modpartages]);


	}
	public function moderationarticle($id, $slug) {
		$this->allowTo('admin');

			# Connexion a la BDD
			DBFactory::start();

			# Récupérations des Articles de la Catégorie
			$modpartage  = \ORM::for_table('modpartages')->find_one($id);
			$idUser = 	$modpartage->IDUSER;
			$datepartage =  $modpartage->MODDATEPARTAGE;
			$PHOTOPARTAGE = $modpartage->MODPHOTOPARTAGE;

			$mcategorie = \ORM::for_table('categories')->where('IDCATEGORIE', $modpartage->IDCATEGORIE)->find_one();

			if(!empty($_POST) &&  isset($_POST['accepter']))
				 {

					extract($_POST);

					if(!empty($_FILES)){
					$handle = new \upload($_FILES['PHOTOPARTAGE']);
				 if ($handle->uploaded) {
						 $handle->file_new_name_body = Shortcut::generateSlug($_POST['MODTITREPARTAGE']);
						 $handle->image_resize = true;
						 $handle->image_x = 460;
						 $handle->image_y = 250;
						 $handle->image_ratio_crop = true;
						 $handle->process('assets/img/partages/');
						 if ($handle->processed) {
								 $PHOTOPARTAGE = $handle->file_dst_name;
								 $handle->clean();
						 } else {
								// $MODPHOTOPARTAGE = 'default.jpg';
								 echo 'Une erreur s\'est produite : ' . $handle->error;
						 }
				 }
				 }


				 $newpartage = \ORM::for_table('partages')->create();

				 $newpartage->TITREPARTAGE = $TITREPARTAGE;
				 $newpartage->CONTENUPARTAGE = $CONTENUPARTAGE;
				 $newpartage->PHOTOPARTAGE =  $PHOTOPARTAGE;
				 $newpartage->IDCATEGORIE = $IDCATEGORIE;
			 	 $newpartage->DATEPARTAGE =$datepartage;
				 $newpartage->IDUSER= $idUser;
				 $newpartage->save();

				 $oldarticle = \ORM::for_table('modpartages')->find_one($id);
				 $oldarticle->delete();

							 }
							 	if(!empty($_POST) && isset($_POST['supprimer'])){
									$oldarticle = \ORM::for_table('modpartages')->find_one($id);
									$oldarticle->delete();

								}
			# Transmettre à la Vue
			$this->show('admin/moderationarticle', [ 'modpartage' => $modpartage, 'mcategorie'=> $mcategorie]);


	}
}

<?php
namespace Controller;

use \W\Controller\Controller;
use Model\DBFactory;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;
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

			$mcategorie = \ORM::for_table('categories')->where('IDCATEGORIE', $modpartage->IDCATEGORIE)->find_one();
			if(!empty($_POST) &&  isset($_POST['accepter']))
				 {


				 $newpartage = \ORM::for_table('partages')->create();

				 $newpartage->TITREPARTAGE = $_POST['TITREPARTAGE'];
				 $newpartage->CONTENUPARTAGE = $_POST['CONTENUPARTAGE'];
				 $newpartage->MODPHOTOPARTAGE =  $_POST['PHOTOPARTAGE'];
				 $newpartage->IDCATEGORIE = $_POST['IDCATEGORIE'];
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

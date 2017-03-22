<?php

namespace Controller;

use \W\Controller\Controller;
use Model\DBFactory;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;


class DefaultController extends Controller {

	/**
	 * Page d'accueil par défaut
	 */
	public function home() {
	# Récupération des Articles pour la home

	    # Connexion a la BDD
		DBFactory::start();


	    # Récupération des Articles pour la home
	    $partages = \ORM::for_table('view_partage')->order_by_desc('IDPARTAGE')->limit(10)->find_result_set();

	    # Transmettre à la Vue
	    $this->show('default/home', ['partages' => $partages]);
	}


    public function connexion() {

				if(!empty($_POST))
						{
							DBFactory::start();
							//on a besoin d'un objet sécurité
							$auth = new AuthentificationModel;
							// vérification du login/password dans la table (cf config.php)
							if($auth->isValidLoginInfo($_POST['login'], $_POST['password']))
							{
									// récup d'un objet User
									$user = new UsersModel;
									// récupération des infos de l'utilisateur
									$util = $user->getUserByUsernameOrEmail($_POST['login']);
									//connexion
									$auth->logUserIn($util); //utilisateur dans la session

									$this->redirectToRoute('default_profil');
							}//sinon retour formulaire
							else{

									$message = 'erreur de pseudo';
									$this->redirectToRoute('default_home'); }
						}

						}



    public function profil() {
			$this->show('default/profil');
		 }

	public function inscription() {
		 if(!empty($_POST))
	 	{
	 		DBFactory::start();



				$newuser->PRENOMUSER = $_POST['PRENOMUSER'];
				$newuser->NOMUSER = $_POST['NOMUSER'];
				$newuser->ROLE = 'user';
				$newuser->DATEDENAISSANCEUSER = $_POST['DATEDENAISSANCEUSER'];
				$newuser->SEXEUSER = $_POST['SEXEUSER'] ;
				$newuser->EMAILUSER = $_POST['EMAILUSER'];
				$newuser->CPUSER = $_POST['CPUSER'];
				$newuser->set_expr('DATEINSCRIPTION', 'NOW()');
				$newuser->PHOTOUSER = $_POST['PHOTOUSER'];
				$newuser->MOTDEPASSEUSER = password_hash($_POST['MOTDEPASSEUSER'], PASSWORD_DEFAULT);
				$newuser->save();
	 						}
								$this->show('default/inscription');
}

	public function deconnexion()
	{
		//on a besoin d'un objet sécurité
		$auth = new AuthentificationModel;

		//déconnexion de la session
		$auth->logUserOut();

		//retour à l'index
		$this->redirectToRoute('default_home');
	}


	public function categories($categorie) {

	    # Connexion a la BDD
	    DBFactory::start();

        $categorieTitre = \ORM::for_table('categories')->where('CHEMIN', $categorie)->find_one();

	    # Récupérations des Articles de la Catégorie
	    $articles  = \ORM::for_table('view_partage')->where('CHEMIN', $categorie)->find_result_set();

	    $nbarticles = $articles->count();

	    $categories = \ORM::for_table('categories')->find_result_set();

	    # Transmettre à la Vue
	    $this->show('default/categorie', ['articles' => $articles, 'categorie' => $categorie, 'categories' => $categories, 'nbarticles' => $nbarticles, 'titre' => $categorieTitre]);
	}



	/* Permet d'afficher un Article*/
	public function partage($id, $slug) {

	    # Connexion a la BDD
	    DBFactory::start();

	    # Récupération des Données de l'Article
	    $partage = \ORM::for_table('view_partage')->find_one($id);

			#récupération des commentaires
			$commentaires = \ORM::for_table('view_commentaire')->where('IDPARTAGE', $id)->find_result_set();


			if(!empty($_POST))
 	 			{
 	 			DBFactory::start();
 	 			$newcomment	= \ORM::for_table('commentaires')->create();

				$newcomment->IDUSER = $_POST['IDUSER'];
				$newcomment->IDPARTAGE = $_POST['IDPARTAGE'];
 				$newcomment->PRENOMUSER = $_POST['PRENOMUSER'];
 				$newcomment->NOMUSER = $_POST['NOMUSER'];
				$newcomment->CONTENUCOMMENTAIRE = $_POST['CONTENUCOMMENTAIRE'];
				$newcomment->set_expr('DATECOMMENTAIRE', 'NOW()');

 				$newcomment->save();

 	 			}

	    # Transmettre à la Vue
	    $this->show('default/partage', ['partage' => $partage , 'commentaires' => $commentaires]);


}
	public function redaction() {
		$this->allowTo(['user', 'admin']);

		$loggedUser = $this->getUser();
		$idloggedUser = $loggedUser['IDUSER'];

	    # Connexion a la BDD
	    DBFactory::start();






$samepartage = \ORM::for_table('view_partage')->where('IDUSER', $idloggedUser )->find_result_set();


		if(!empty($_POST))
         {
         $newpartage = \ORM::for_table('modpartages')->create();

         $newpartage->MODTITREPARTAGE = $_POST['MODTITREPARTAGE'];
         $newpartage->MODCONTENUPARTAGE = $_POST['MODCONTENUPARTAGE'];
    //	 $newpartage->MODPHOTOPARTAGE =  $_POST['PHOTOPARTAGE'];
         $newpartage->set_expr('MODDATEPARTAGE', 'NOW()');
         $newpartage->IDCATEGORIE = $_POST['MODIDCATEGORIE'];
         $newpartage->IDUSER= $idloggedUser;
         $newpartage->save();
                     }


        $this->show('redaction', ['samepartage' => $samepartage]);

        }

        public function contact(){

	    # Connexion a la BDD
	    DBFactory::start();

	    # Transmettre à la Vue
	    $this->show('default/contact');
	   }
        public function conditionsGenerale(){

	    # Connexion a la BDD
	    DBFactory::start();

	    # Transmettre à la Vue
	    $this->show('default/conditionsGenerale');
	   }

		public function deleteprofil($id){
			# Connexion a la BDD
	   		DBFactory::start();

	   		$person = \ORM::for_table('users')->find_one($id);
			$person->delete();

			//on a besoin d'un objet sécurité
			$auth = new AuthentificationModel;

			//déconnexion de la session
			$auth->logUserOut();

	   		$this->redirectToRoute('default_home');
        }



}

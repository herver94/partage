<?php

namespace Controller;

use \W\Controller\Controller;
use Model\DBFactory;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;


class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home() {
		# Récupération des Articles pour la home

	    # Connexion a la BDD
        DBFactory::start();

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

									$this->redirectToRoute('oiso');
							}//sinon retour formulaire
							else{

									$message = 'erreur de pseudo';
									$this->redirectToRoute('default_home' ); }
						}
						}
	/**
	 * Permet d'afficher les articles d'une catégorie
	 * $categorie
	 */

	 public function inscription() {
		 if(!empty($_POST))
	 			{
	 				DBFactory::start();



	 			$newuser	= \ORM::for_table('users')->create();

				$newuser->PRENOMUSER = $_POST['PRENOMUSER'];
				$newuser->NOMUSER = $_POST['NOMUSER'];
				$newuser->ROLE = 'USER';
				$newuser->DATEDENAISSANCEUSER = $_POST['DATEDENAISSANCEUSER'];
				$newuser->SEXEUSER = $_POST['SEXEUSER'] ;
				$newuser->EMAILUSER = $_POST['EMAILUSER'];
				$newuser->CPUSER = $_POST['CPUSER'];
				$newuser->PHOTOUSER = $_POST['PHOTOUSER'];
				$newuser->MOTDEPASSEUSER = password_hash($_POST['MOTDEPASSEUSER'], PASSWORD_DEFAULT);
				$newuser->save();
	 						}
								$this->show('default/inscription');
							}


	public function categories($categorie) {

	    # Connexion a la BDD
	    DBFactory::start();

	    # Récupérations des Articles de la Catégorie
	    $articles  = \ORM::for_table('view_partage')->where('CHEMIN', $categorie)->find_result_set();

	    $nbarticles = $articles->count();

	    $categories = \ORM::for_table('categories')->find_result_set();

	    # Transmettre à la Vue
	    $this->show('default/categorie', ['articles' => $articles, 'categorie' => $categorie, 'categories' => $categories, 'nbarticles' => $nbarticles]);


	}

	/* Permet d'afficher un Article*/
	public function partage($id, $slug) {

	    # Connexion a la BDD
	    DBFactory::start();

	    # Récupération des Données de l'Article
	    $partage = \ORM::for_table('view_partage')->find_one($id);

	    # Transmettre à la Vue
	    $this->show('default/partage', ['partage' => $partage]);

	}
	public function redaction() {

	    # Connexion a la BDD
	    DBFactory::start();

	    # Récupération des Données de l'Article
	   // $article = \ORM::for_table('view_partage')->find_one($id);

	    # Suggestions
	   // $suggestions = \ORM::for_table('view_partage')->where('IDCATEGORIE', $article->IDCATEGORIE)->where_not_equal('IDARTICLE', $id)->limit(3)->order_by_desc('IDARTICLE')->find_result_set();

	    # Transmettre à la Vue
	    $this->show('redaction');

	}
	public function gestionDesMembres(){

  DBFactory::start();
	$membres = \ORM::for_table('view_partage')->find_result_set();
		//$this->allowTo('admin');
 $this->show('admin/gestionDesMembres', ['membres' => $membres ]);


	}
    public function profil() {

	    # Connexion a la BDD
	    DBFactory::start();

	    # Récupération des Articles pour la home
	    $profil = \ORM::for_table('view_partage')->where('IDUSER')->find_one();
        
        # Récupérer l'utilisateur connecté
        $loggedUser = $this->getUser();

	    # Transmettre à la Vue
	    $this->show('default/profil', ['profil' => $profil]);
	}



}

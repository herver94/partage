<?php

namespace Controller;

use \W\Controller\Controller;
use Model\DBFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home() {

	    # Connexion a la BDD
	    DBFactory::start();

	    # Récupération des Articles pour la home
	    $partages = \ORM::for_table('view_partage')->order_by_desc('IDPARTAGE')->limit(10)->find_result_set();

	    # Transmettre à la Vue
	    $this->show('default/home', ['partages' => $partages]);
	}

	/**
	 * Permet d'afficher les articles d'une catégorie
	 * @param STRING $categorie
	 */
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


}

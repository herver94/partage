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
	    $articles = \ORM::for_table('view_partage')->order_by_desc('IDPARTAGE')->limit(10)->find_result_set();

	    # Transmettre à la Vue
	    $this->show('default/home', ['articles' => $articles]);
	}

	/**
	 * Permet d'afficher les articles d'une catégorie
	 * @param STRING $categorie
	 */
	public function categorie($categories) {
	    # Connexion a la BDD
	    DBFactory::start();

	    # Récupérations des Articles de la Catégorie
	    $articles  = \ORM::for_table('view_partage')->where('LIBELLECATEGORIE', ucfirst($categorie))->find_result_set();

	    $nbarticles = $articles->count();

	    # Transmettre à la Vue
	    $this->show('default/categorie', ['articles' => $articles, 'categorie' => $categorie, 'nbarticles' => $nbarticles]);

	}

	/* Permet d'afficher un Article*/
	public function partage($id, $slug) {

	    # Connexion a la BDD
	    DBFactory::start();

	    # Récupération des Données de l'Article
	    $article = \ORM::for_table('view_partage')->find_one($id);

	    # Suggestions
	   // $suggestions = \ORM::for_table('view_partage')->where('IDCATEGORIE', $article->IDCATEGORIE)->where_not_equal('IDARTICLE', $id)->limit(3)->order_by_desc('IDARTICLE')->find_result_set();

	    # Transmettre à la Vue
	    $this->show('default/article', ['article' => $article, 'categorie' => $article->LIBELLECATEGORIE]);

	}


}


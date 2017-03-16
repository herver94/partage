<?php

namespace Controller;


use \W\Controller\Controller;
use Model\Db\DBFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		DBFactory::start();

		$partages = \ORM::for_table('view_partage')->find_result_set();

		$this->show('default/home', ['partages' => $partages]);
	    
	}

}	
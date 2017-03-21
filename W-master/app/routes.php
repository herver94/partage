<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		['GET', '/profil', 'Default#profil', 'default_profil'],

		['POST', '/', 'Default#connexion', 'default_connexion'],
		['GET', '/deconnexion', 'Default#deconnexion', 'default_deconnexion'],
		['GET', '/accueil.html', 'Default#home', 'default_accueil'],
		['GET', '/partages/[:categorie]', 'Default#categories', 'default_categorie'],
		['GET|POST', '/redaction', 'Default#redaction', 'redaction'],
		['GET|POST', '/inscription', 'Default#inscription', 'Default_inscription'],
		['GET', '/partage/[i:id]-[:slug].html', 'Default#partage', 'default_partage'],
		['GET|POST', '/admin/gestionDesMembres', 'Default#gestionDesMembres', 'gestionDesMembres'],
      ['GET', '/conditionsGenerale', 'Default#conditionsGenerale', 'default_conditionsGenerale'],
    ['GET', '/contact', 'Default#contact', 'default_contact'],
	);

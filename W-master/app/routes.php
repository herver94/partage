<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		['POST', '/', 'Default#connexion', 'default_connexion'],
		['GET', '/accueil.html', 'Default#home', 'default_accueil'],
		['GET', '/partages/[:categorie]', 'Default#categories', 'default_categorie'],
		['GET', '/redaction', 'Default#redaction', 'redaction'],
		['GET|POST', '/inscription', 'Default#inscription', 'Default_inscription'],
		['GET', '/partage/[i:id]-[:slug].html', 'Default#partage', 'default_partage'],
		['GET|POST', '/admin/gestionDesMembres', 'Default#gestionDesMembres', 'gestionDesMembres']
	);

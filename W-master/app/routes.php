<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['POST', '/', 'Default#connexion', 'default_connexion'],
		['GET', '/redaction', 'Default#redaction', 'redaction'],
		['GET|POST', '/inscription', 'Default#inscription', 'Default_inscription'],
		['GET|POST', '/admin/gestionDesMembres', 'Default#gestionDesMembres', 'gestionDesMembres']
	);

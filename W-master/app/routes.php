<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		['GET', '/accueil.html', 'Default#home', 'default_accueil'],

		['GET', '/partages/[:categorie]', 'Default#categories', 'default_categorie'],

		['GET', '/partage/[i:id]-[:slug].html', 'Default#partage', 'default_partage'],
	    
	);
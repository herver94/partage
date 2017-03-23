<?php

	$w_routes = array(

		['GET', '/', 'Default#home', 'default_home'],

		['GET', '/profil', 'Default#profil', 'default_profil'],

		['POST', '/', 'Default#connexion', 'default_connexion'],

		['GET', '/deconnexion', 'Default#deconnexion', 'default_deconnexion'],

		['GET', '/accueil.html', 'Default#home', 'default_accueil'],

		['GET', '/partages/[:categorie]', 'Default#categories', 'default_categorie'],

		['GET|POST', '/redaction', 'Default#redaction', 'default_redaction'],

		['GET|POST', '/moderation', 'Admin#moderation', 'admin_moderation'],

		['GET|POST', '/inscription', 'Default#inscription', 'default_inscription'],

		['GET|POST', '/partage/[i:id]-[:slug].html', 'Default#partage', 'default_partage'],

    ['GET', '/search', 'Default#search', 'default_search'],

		['GET', '/deleteprofil/[:id]', 'Default#deleteprofil', 'default_deleteprofil'],

    ['GET|POST', '/admin/gestionDesMembres', 'Default#gestionDesMembres', 'gestionDesMembres'],

    ['GET', '/conditionsGenerale', 'Default#conditionsGenerale', 'default_conditionsGenerale'],

    ['GET|POST', '/moderation/[i:id]-[:slug].html', 'Admin#moderationarticle', 'admin_moderationarticle'],

    ['GET|POST', '/contact', 'Default#contact', 'default_contact'],


    	['GET', '/tags', 'Default#tags', 'tags'],

    	
	);

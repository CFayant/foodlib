<?php

	$w_routes = array(

		['GET', '/home/', 'Default#home', 'home'],
		['GET|POST', '/inscription/', 'Default#inscription', 'inscription'],
		['GET|POST', '/inscription_b/', 'Default#inscription_b', 'inscription_b'],
		['GET|POST', '/inscription_d/', 'Default#inscription_d', 'inscription_d'],
		['GET', '/profil/', 'Default#profil', 'profil'],
		['GET', '/profil_b/', 'Default#profil_b', 'profil_b'],
		['GET', '/profil_d/', 'Default#profil_d', 'profil_d'],
		['GET', '/edition_p/', 'Default#edition_p', 'edition_p'],
    ['GET|POST', '/creationDon/', 'Default#creationDon', 'creationDon'],
		['GET', '/detailOffre/', 'Default#detailOffre', 'detailOffre'],
		['GET', '/listeOffres/', 'Default#listeOffres', 'listeOffres'],
		['GET', '/cgu/', 'Default#cgu', 'cgu']

	);

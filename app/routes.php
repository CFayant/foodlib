<?php

	$w_routes = array(

		['GET', '/home/', 'Default#home', 'home'],
		['GET|POST', '/inscription/', 'Inscription#inscription', 'inscription'],
		['GET|POST', '/inscription_b/', 'Inscription#inscription_b', 'inscription_b'],
		['GET|POST', '/inscription_d/', 'Inscription#inscription_d', 'inscription_d'],
		['GET', '/profil/', 'Profil#profil', 'profil'],
		['GET', '/profil_b/', 'Profil#profil_b', 'profil_b'],
		['GET', '/profil_d/', 'Profil#profil_d', 'profil_d'],
		['GET', '/edition_p/', 'Profil#edition_p', 'edition_p'],
    	['GET|POST', '/creationDon/', 'Offre#creationDon', 'creationDon'],
		['GET', '/detailOffre/', 'Offre#detailOffre', 'detailOffre'],
		['GET', '/listeOffres/', 'Offre#listeOffres', 'listeOffres'],
		['GET', '/cgu/', 'Default#cgu', 'cgu']

	);

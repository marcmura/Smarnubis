<?php
// http://192.168.33.10/
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		// Templates/smarnu
		['GET', '/presentation', 'Smarnu#presentation', 'presentation'],

			['GET', '/deleguesRegionaux', 'smarnu#deleguesRegionaux', 'deleguesRegionaux'],

			['GET', '/conseilAdministration', 'smarnu#conseilAdministration', 'conseilAdministration'],

			['GET', '/crReunion', 'smarnu#crReunion', 'crReunion'],

			['GET', '/regInterieur', 'smarnu#regInterieur', 'regInterieur'],

			['GET', '/comStatutaire', 'smarnu#comStatutaire', 'comStatutaire'],

			['GET', '/histoireSmarnu', 'smarnu#histoireSmarnu', 'histoireSmarnu'],

			['GET', '/lettreSyndicale', 'smarnu#lettreSyndicale', 'lettreSyndicale'],

			['GET', '/vigilanceRisques', 'smarnu#vigilanceRisques', 'vigilanceRisques'],

			['GET', '/partenaires', 'smarnu#partenaires', 'partenaires'],
			
			['GET', '/liens', 'smarnu#liens', 'liens'],


		// Templates/textes 
			['GET', '/nouveauxTextes', 'textes#nouveauxTextes', 'nouveauxTextes'],

			['GET', '/textesEuropeens', 'textes#textesEuropeens', 'textesEuropeens'],

			['GET', '/emoluments', 'textes#emoluments', 'emoluments'],

			['GET', '/gardesAstreintes', 'textes#gardesAstreintes', 'gardesAstreintes'],

		// Templates/documentation
			['GET', '/statutPH', 'documentation#statutPH', 'statutPH'],

			['GET', '/chirurgiePlateaux', 'documentation#chirurgiePlateaux', 'chirurgiePlateaux'],

			['GET', '/primes', 'documentation#primes', 'primes'],

			['GET', '/perinatalite', 'documentation#perinatalite', 'perinatalite'],

			['GET', '/demographie', 'documentation#demographie', 'demographie'],

			['GET', '/securite', 'documentation#securite', 'securite'],

			['GET', '/retraites', 'documentation#retraites', 'retraites'],

			['GET', '/permanenceSoins', 'documentation#permanenceSoins', 'permanenceSoins'],

			['GET', '/urgences', 'documentation#urgences', 'urgences'],

			['GET', '/travailAdditionnel', 'documentation#travailAdditionnel', 'travailAdditionnel'],

			['GET', '/reanimation', 'documentation#reanimation', 'reanimation'],

			['GET', '/fmcEpp', 'documentation#fmcEpp', 'fmcEpp'],

			['GET', '/rttCet', 'documentation#rttCet', 'rttCet'],

			['GET', '/mapar', 'documentation#mapar', 'mapar'],

		// Templates/contacts
			['GET', '/contacts', 'contacts#contacts', 'contacts'],

			['GET', '/adhesion', 'contacts#adhesion', 'adhesion'],

			['GET', '/agenda', 'contacts#agenda', 'agenda'],

			['GET', '/liste', 'contacts#liste', 'liste'],

		// Templates/news
			['GET', '/archives', 'news#archives', 'archives'],

			['GET', '/newsletter', 'news#newsletter', 'newsletter'],

			['GET', '/news', 'news#news', 'news'],

		// Templates/administration
			['GET|POST', '/login', 'Administration#login', 'login'],
			['GET|POST', '/logout', 'Administration#logout', 'logout'],

			['GET|POST', '/inscription', 'Administration#inscription', 'inscription'],
			
			['GET|POST', '/ajoutDelegue', 'Administration#ajoutDelegue', 'ajoutDelegue'],
			['GET|POST', '/gestionDelegue', 'Administration#gestionDelegue', 'gestionDelegue'],
			['GET|POST', '/[i:id]/updateDelegue', 'Administration#updateDelegue', 'updateDelegue'],
			['GET|POST', '/[i:id]/deleteDelegue', 'Administration#deleteDelegue', 'deleteDelegue'],

	);
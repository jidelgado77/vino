<?php
// Ouverture de la session
session_start();

/**
 * Permet de réorienter la requête vers le contrôleur demandé.
 *
 * Cette classe est appelée une seule fois, à partir de la page index du site.
 *
 * @package  Vino
 * @author   Guillaume Harvey
 * @author   Alexandre Pachot
 * @version  1.0
 */
class Routeur
{
	/**
	 * Permet d’appeler le contrôleur demandé
	 *
	 * @return void
	 */
	public static function route()
	{
		// Récupére la chaine de caractères de l’URL ou des données du formulaire
		$chaineRequete = $_SERVER['QUERY_STRING'];

		// Cherche la position de la première occurrence de & dans la chaine de caractères
		$positionEsperluette = strpos($chaineRequete, '&');

		// Initialise le controleur
		$controleur = '';

		// Récupère le controleur
		if($positionEsperluette === false)
			$controleur = $chaineRequete;
		else
			$controleur = substr($chaineRequete, 0, $positionEsperluette);

		// Si aucun contrôleur n’est spécifié, mettre le contrôleur par défaut
		if($controleur == '')
			$controleur = 'login';

		// Détermine la classe du controleur
		$controleur = 'Controleur_' . $controleur;

		// Si le contrôleur existe
		if(class_exists($controleur))
		{
			require_once('Procedures.php');

			// Crée une nouvelle instance de la classe
			$objetControleur = new $controleur;

			// Si l’objet est instancié d’une classe qui hérite de BaseControleur
			if($objetControleur instanceof Controleur)
			{
				// Traite la requête
				$objetControleur->traite($_REQUEST);
			}
			else
				trigger_error('Controleur invalide.');
		}
		else
		{
			trigger_error("Erreur 404! Le controleur $controleur n’existe pas.");
		}
	}
}

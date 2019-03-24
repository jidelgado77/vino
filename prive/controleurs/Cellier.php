<?php
class Cellier extends Controleur
{
	public function traite(array $params)
	{
		// On vérifie que l’usagé est bien connecté
		if ( ! isset($_SESSION["idUsager"]) )
		{
			header('Location: ' . base_url() );
		}
		switch($params['action'])
		{
			case 'index':
				$this->index();
				break;

			// Affichage du formulaire
			case 'ajouter-form':
				$this->ajouter_form();
				break;

			// Ajout d’un cellier
			case 'ajouter':
				$this->ajouter();
				break;

			// Suppression de cellier
			case 'supprimer':
				$this->supprimer();
				break;

			default :
				trigger_error('Action invalide.');
		}
	}

	public function index()
	{
		// Récupère d’usager qui est connecté
		$modeleUsager = $this->modele('Usager');		
		$user = $modeleUsager->obtenirUsager($_SESSION["UserID"]);
		$_SESSION['id_usager'] = $user->id_usager;
		
		// Affiche la liste des celliers de l’usager connecté
		$modeleCellier = $this->modele('Cellier');
		$donnees['celliers'] = $modeleCellier->obtenir_par_id($_SESSION['id_usager']);
		$this->afficheVue('modeles/en-tete');
		$this->afficheVue('modeles/menu-usager');
		$this->afficheVue('cellier/liste', $donnees);
		$this->afficheVue('modeles/bas-de-page');
	}
	
	public function ajouter_form()
	{
		$this->afficheVue('modeles/en-tete');
		$this->afficheVue('modeles/menu-usager');
		$this->afficheVue('cellier/ajouter');
		$this->afficheVue('modeles/bas-de-page');
	}
	
	public function ajouter()
	{
		$modeleCellier = $this->modele('Cellier');
		$modeleCellier->ajoutCellier($_SESSION['id_usager']);
		$donnees['celliers'] = $modeleCellier->obtenir_par_id($_SESSION['id_usager']);
		$this->afficheVue('modeles/en-tete');
		$this->afficheVue('modeles/menu-usager');
		$this->afficheVue('cellier/liste', $donnees);
		$this->afficheVue('modeles/bas-de-page');
	}
	
	public function supprimer()
	{
		$body = json_decode(file_get_contents('php://input'));
		$modeleCellier = $this->modele('Cellier');
		$modeleCellier->supprimer_par_id($body->id);
		echo json_encode(true);
	}
	
}

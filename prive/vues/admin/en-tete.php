<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Page d’administration de Vino">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<title>Vino admin</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/material.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/vino-admin.css">
	</head>
	<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<div class="android-header mdl-layout__header mdl-layout__header--waterfall">
			<div class="mdl-layout__header-row">
				<span class="android-title mdl-layout-title">
					<img class="android-logo-image" src="<?php echo base_url(); ?>images/vino-logo.png">
				</span>
				<!-- Add spacer, to align navigation to the right in desktop -->
				<div class="android-header-spacer mdl-layout-spacer"></div>
				<!-- Navigation -->
				<div class="android-navigation-container">
					<nav class="android-navigation mdl-navigation">
						<a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo site_url('login&action=logout'); ?>">Déconnexion</a>
					</nav>
				</div>
				<span class="android-mobile-title mdl-layout-title">
					<img class="android-logo-image" src="<?php echo base_url(); ?>images/vino-logo.png">
				</span>
			</div>
		</div>
		<div class="android-drawer mdl-layout__drawer">
			<span class="mdl-layout-title">
				<img class="android-logo-image" src="<?php echo base_url(); ?>images/vino-logo.png">
			</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="<?php echo site_url('login&action=logout'); ?>">Déconnexion</a>
			</nav>
		</div>
		<div class="android-content mdl-layout__content">
		<a name="top"></a>
		<div class="android-be-together-section mdl-typography--text-center">
			<div class="logo-font android-slogan">be together. not the same.</div>
			<div class="logo-font android-sub-slogan">welcome to android... be yourself. do your thing. see what's going on.</div>
			<div class="logo-font android-create-character">
				<a href=""><img src="images/andy.png"> create your android character</a>
			</div>
			<a href="#screens">
				<button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
					<i class="material-icons">expand_more</i>
				</button>
			</a>
		</div>
		<div class="android-screen-section mdl-typography--text-center">
			<a name="screens"></a>
			<div class="mdl-typography--display-1-color-contrast">Powering screens of all sizes</div>
		</div>
		<footer class="android-footer mdl-mega-footer">
				<div class="mdl-mega-footer--top-section">
					<div class="mdl-mega-footer--right-section">
						<a class="mdl-typography--font-light" href="#haut_de_page">
							Retourner en haut de la page
							<i class="material-icons">expand_less</i>
						</a>
					</div>
				</div>
				<div class="mdl-mega-footer--middle-section">
					<p class="mdl-typography--font-light">
						Contactez-nous pour sur 
						<a class="mdl-navigation__link" href="https://github.com/projet-web-Maisonneuve/vino" target="_blank">GitHub</a> 
						pour plus de fonctionnalités.
					</p>
				</div>
			</footer>
		</div>
		<script src="<?php echo base_url(); ?>js/material.js"></script>
	</body>
</html>

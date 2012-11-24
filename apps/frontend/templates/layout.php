<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<?php include_http_metas() ?>
	<?php include_metas() ?>
	<?php include_title() ?>
	<link rel="shortcut icon" href="/favicon.ico" />
	<?php include_stylesheets() ?>
	<?php include_javascripts() ?>
</head>

<body>

<!--
	Entête de la page
	-->
<div id="header" class="container">
	
	<p class="logo"><img src="/images/logo.png" /></p>
	<h1>OPSEARCH</h1>
        <p class="app_title">Statistiques</p>
	
	<ul id="menuDeroulant">
		<li><a href="<?php echo url_for('@homepage') ?>">Accueil Statistiques</a></li>
		<li><a href="<?php echo url_for('@plaquetteMetier') ?>">Plaquette Métier</a></li>
		<li><a href="<?php echo url_for('@plaquetteSecteur') ?>">Plaquette Secteur</a></li>
		<li><a href="<?php echo url_for('@reportingMission') ?>">Reporting Mission</a></li>
	</ul>
</div>

<!--
	Contenu de la page
	-->
<div id="content" class="container">
	
	<?php echo $sf_content ?>

</div>

<!--
	Pied de page
	-->
<div id="footer" class="container">
	
	<p>copyright © opsearch</p>

</div>
	
</body>

</html>

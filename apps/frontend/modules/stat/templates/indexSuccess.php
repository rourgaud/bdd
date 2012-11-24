<div id="page_accueil_stat">

<h2>Outils statistiques</h2>

<p>Choisissez un outil de reporting:</p>

<ul>
	<li>
            <p>
                <a href="<?php echo url_for('@plaquetteMetier') ?>">Plaquette métier</a>
                <br/><em>Rapport d'expérience métier OPSEARCH sur un poste</em>
            </p>
        </li>
	<li>
            <p>
                <a href="<?php echo url_for('@plaquetteSecteur') ?>">Plaquette secteur</a>
                <br/><em>Rapport d'expérience OPSEARCH sur un secteur</em>
            </p>
        </li>
	<li>
            <p>
                <a href="<?php echo url_for('@reportingMission') ?>">Reporting missions</a>
                <br/><em>Document à imprimer pour une seule mission en cours, ou achevée.</em>
            </p>
        </li>
</ul>

<div class="separator"></div>

<h3>Listes des derniers reporting</h3>

<table>
    <tr>
        <th>Plaquette metier</th>
        <th>Date création</th>
    </tr>
    <?php foreach($plaquetteMetiers as $pm): ?>
    <tr>
        <td>
            <a href="<?php echo url_for('@plaquetteMetierPreview?id='.$pm->getId()) ?>">
                <?php echo $pm->getIntitulePost() ?>
            </a>
        </td>
        <td><?php echo $pm->getCreatedAt() ?></td>
    </tr>
    <?php endforeach ?>
    <tr>
        <th>Plaquette secteur</th>
        <th>Date création</th>
    </tr>
    <?php foreach($plaquetteSecteurs as $ps): ?>
    <tr>
        <td>
            <a href="<?php echo url_for('@plaquetteSecteurPreview?id='.$ps->getId()) ?>">
                <?php echo $ps->getSecteur() ?>
            </a>
        </td>
        <td><?php echo $ps->getCreatedAt() ?></td>
    </tr>
    <?php endforeach ?>
    <tr>
        <th>Outil reporting</th>
        <th>Date création</th>
    </tr>
    <?php foreach($reportingMissions as $rm): ?>
    <tr>
        <td>
            <a href="<?php echo url_for('@reportingMissionPreview?id='.$rm->getId()) ?>">
                <?php echo $rm->getMission() ?>
            </a>
        </td>
        <td><?php echo $rm->getCreatedAt() ?></td>
    </tr>
    <?php endforeach ?>
</table>

</div>
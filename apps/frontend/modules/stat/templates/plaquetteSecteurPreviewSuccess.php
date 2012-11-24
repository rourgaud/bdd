<h2>Plaquette Secteur</h2>

<?php if(isset($test)): ?>
<pre>
<?php print_r($test) ?>
</pre>
<?php endif ?>

<div class="plaquette">

    <h3>Rapport d'expérience métier OPSEARCH pour le secteur <b><?php echo $plaquetteSecteur->getSecteur() ?></b></h3>

    <p class="p_date"><em>le <?php echo date('d/m/Y') ?></em></p>

    <p>zone geographique des sociétés du candidat</p>

    <table>
        <tr>
            <td>Nombre de candidats approchés dans le secteur:</td>
            <td align="right"><?php echo $plaquetteSecteur->getNbCandidat() ?></td>
        </tr>
        <tr>
            <td>Nombre de sociétés approchées dans le secteur:</td>
            <td align="right"><?php echo $plaquetteSecteur->getNbSociete() ?></td>
        </tr>
        <tr>
            <td>Nombre de missions effectuées dans le secteur depuis 2004:</td>
            <td align="right"><?php echo $plaquetteSecteur->getNbMission() ?></td>
        </tr>
        <tr>
            <td>Liste complète des postes chassés dans le secteur (par dénomination de poste):</td>
            <td align="right">
                    <?php $postes = explode(';', $plaquetteSecteur->getPoste()) ?>
                    <ul>
                    <?php foreach($postes as $poste): ?>
                        <li><?php echo $poste ?></li>
                    <?php endforeach ?>
                    </ul>
            </td>
        </tr>
        <tr>
            <td>Liste des clients dans le secteur:</td>
            <td align="right">
                <?php $clients = explode(';', $plaquetteSecteur->getClient()) ?>
                <ul>
                <?php foreach($clients as $client): ?>
                    <li><?php echo $client ?></li>
                <?php endforeach ?>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Médiane salariale:</td>
            <td align="right"><?php echo $plaquetteSecteur->getMedianeSalariale() ?> K€ / an</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>Taux de réussite OPSEARCH pour le secteur: <span class="loud"><?php echo $plaquetteSecteur->getTauxReussite() ?></span> %</th>
        </tr>
    </table>

</div>

<h2>Reporting mission</h2>

<?php if(isset($test)): ?>
<pre>
<?php print_r($test) ?>
</pre>
<?php endif ?>

<div class="plaquette">

<h3>Statistiques sur la mission n° <?php echo $mission->getId() ?></h3>

<table>
    <tr>
        <td>Client:</td>
        <td align="right"><?php echo $mission->getClient() ?></td>
    </tr>
    <tr>
        <td>Intitulé du poste:</td>
        <td align="right"><?php echo $mission->getIntitulePoste() ?></td>
    </tr>
</table>

<table>
    <tr>
        <td>Nombre de candidats approchés:</td>
        <td align="right"><?php echo $reportingMission->getNbCandidat() ?></td>
    </tr>
    <tr>
        <td>nombre de sociétés approchées:</td>
        <td align="right"><?php echo $reportingMission->getNbSociete() ?></td>
    </tr>
</table>

<table>
        <tr>
            <th colspan="3">Rémunération</th>
        </tr>
        <tr>
            <td colspan="2">Rémunération moyenne:</td>
            <td colspan="2" align="right"><?php echo $reportingMission->getRemMoy() ?> K€ / an</td>
        </tr>
        <tr>
            <td>Rémunération maximale:</td>
            <td></td>
            <td align="right"><?php echo $reportingMission->getRemMax() ?> K€ / an</td>
        </tr>
        <tr>
            <td></td>
            <td>Age du candidat:</td>
            <td align="right"><?php echo UtilDate::age($candidatmax->getDateNaissance()) ?> ans</td>
        </tr>
        <tr>
            <td></td>
            <td>Formation:</td>
            <td align="right">
                    <?php foreach($candidatmax->getFormation() as $formation): ?>
                    <em><?php echo $formation->getNiveauFormation() ?></em> <?php echo $formation->getEcole() ?>
                    <?php endforeach ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Société de provenance:</td>
            <td align="right">
                    <?php foreach($candidatmax->getParcour() as $parcour): ?>
                    <?php echo $parcour->getSociete() ?>
                    <?php endforeach ?>
            </td>
        </tr>
        <tr>
            <td>Rémunération minimale:</td>
            <td></td>
            <td align="right"><?php echo $reportingMission->getRemMin() ?> K€ / an</td>
        </tr>
        <tr>
            <td></td>
            <td>Age du candidat:</td>
            <td align="right"><?php echo UtilDate::age($candidatmin->getDateNaissance()) ?> ans</td>
        </tr>
        <tr>
            <td></td>
            <td>Formation:</td>
            <td align="right">
                    <?php foreach($candidatmin->getFormation() as $formation): ?>
                    <em><?php echo $formation->getNiveauFormation() ?></em> <?php echo $formation->getEcole() ?>
                    <?php endforeach ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Société de provenance:</td>
            <td align="right">
                    <?php foreach($candidatmin->getParcour() as $parcour): ?>
                    <?php echo $parcour->getSociete() ?>
                    <?php endforeach ?>
            </td>
        </tr>
    </table>
<table>
    <tr>
        <th>Formation des candidats approchés (en %)</th>
        <th>Diagramme des tranches d’âge des candidats approchés</th>
    </tr>
    <tr>
        <td><p class="graph"><img src="<?php echo $reportingMission->getFormationPourcent() ?>" /></p></td>
        <td><p class="graph"><img src="<?php echo $reportingMission->getAgeGraph() ?>" /></p></td>
    </tr>

    <tr>
        <th>Répartition Homme Femme</th>
        <th>Secteur de provenance des candidats approchés en %</th>
    </tr>
    <tr>
        <td><p class="graph"><img src="<?php echo $reportingMission->getSexePourcent() ?>" /></p></td>
        <td><p class="graph"><img src="<?php echo $reportingMission->getSecteurPourcent() ?>" /></p></td>
    </tr>

    <tr>
        <th>Répartition IN/OUT/BU</th>
        <th>Critères spécifiques</th>
    </tr>
    <tr>
        <td><p class="graph"><img src="<?php echo $reportingMission->getInoutbuPourcent() ?>" /></p></td>
        <td><p class="graph"><img src="<?php echo $reportingMission->getCritereSpe() ?>" /></p></td>
    </tr>
</table>

</div>
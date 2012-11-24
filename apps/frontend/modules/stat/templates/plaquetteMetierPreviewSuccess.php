<h2>Plaquette métier</h2>

<pre>
<?php print_r($plaquetteMetier->initData()) ?>
</pre>

<div class="plaquette">

    <h3>Rapport d'expérience métier OPSEARCH pour le poste de <b><?php echo $plaquetteMetier->getIntitulePost() ?></b></h3>

    <p class="p_date"><em>le <?php echo date('d/m/Y') ?></em></p>

    <table>
        <tr>
            <th>Nombre de candidats approchés:</th>
            <th align="right"><?php echo $plaquetteMetier->getNbCandidat() ?></th>
        </tr>
    </table>

    <table>
        <tr>
            <th colspan="3">Rémunération</th>
        </tr>
        <tr>
            <td colspan="2">Rémunération moyenne:</td>
            <td colspan="2" align="right"><?php echo $plaquetteMetier->getRemMoy() ?> K€ / an</td>
        </tr>
        <tr>
            <td>Rémunération maximale:</td>
            <td></td>
            <td align="right"><?php echo $plaquetteMetier->getRemMax() ?> K€ / an</td>
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
            <td align="right"><?php echo $plaquetteMetier->getRemMin() ?> K€ / an</td>
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
            <th colspan="2">Age</th>
        </tr>
        <tr>
            <td>Age moyen:</td>
            <td align="right"><?php echo $plaquetteMetier->getAgeMoy() ?> ans</td>
        </tr>
        <tr>
            <td>Age minimum:</td>
            <td align="right"><?php echo $plaquetteMetier->getAgeMin() ?> ans</td>
        </tr>
        <tr>
            <td>Age maximum:</td>
            <td align="right"><?php echo $plaquetteMetier->getAgeMax() ?> ans</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>Secteur de provenance (en %)</th>
            <th>Formation (en %)</th>
        </tr>
        <tr>
            <td><p class="graph"><img src="<?php echo $plaquetteMetier->getSecteurPourcent() ?>" /></p></td>
            <td><p class="graph"><img src="<?php echo $plaquetteMetier->getFormationPourcent() ?>" /></p></td>
        </tr>
    </table>

    <p>Localisation géographique (en %): <em>ou sont les CP</em></p>

    <table>
        <tr>
            <th>Taux de réussite OPSEARCH pour ce poste: <span class="loud"><?php echo $plaquetteMetier->getTauxReussite() ?></span> %</th>
        </tr>
    </table>
    
</div>
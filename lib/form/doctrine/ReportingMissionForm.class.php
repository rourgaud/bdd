<?php

/**
 * ReportingMission form.
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ReportingMissionForm extends BaseReportingMissionForm
{
    public function configure()
    {
        unset(
            $this['nb_candidat'],
            $this['nb_societe'],
            $this['rem_moy'],
            $this['rem_max'],
            $this['id_cand_max'],
            $this['rem_min'],
            $this['id_cand_min'],
            $this['formation_pourcent'],
            $this['age_graph'],
            $this['loc_pourcent'],
            $this['sexe_pourcent'],
            $this['secteur_pourcent'],
            $this['inoutbu_pourcent'],
            $this['mediane_salariale'],
            $this['rap_exp_rem'],
            $this['critere_spe'],
            $this['aff_mission_id'],
            $this['saved'],
            $this['utilisateur_id'],
            $this['created_at'],
            $this['updated_at']
        );

        $this->widgetSchema->setLabels(array(
            'aff_nb_candidat'        => 'Nombre de candidats',
            'aff_nb_societe'         => 'Nombre de sociétés',
            'aff_rem_moy'            => 'Rémunération moyenne',
            'aff_rem_max'               => 'Rémunération maximum',
            'aff_age_cand_max'          => 'Age du candidat',
            'aff_formation_cand_max'    => 'Formation du candidat',
            'aff_societe_prov_cand_max' => 'Société de provenance',
            'aff_rem_min'               => 'Rémunération minimum',
            'aff_age_cand_min'          => 'Age du candidat',
            'aff_formation_cand_min'    => 'Formation du candidat',
            'aff_societe_prov_cand_min' => 'Société de provenance',
            'aff_formation_pourcent' => 'Formation (en %)',
            'aff_age_graph'          => 'Diagramme des ages',
            'aff_secteur_pourcent'   => 'Secteur (en %)',
            'aff_loc_pourcent'       => 'Localisation géographique',
            'aff_sexe'               => 'Répartition homme/femme',
            'aff_inoutbu_pourcent'   => 'Répartition IN/OUT/BU',
            'aff_mediane_salariale'  => 'Médiane salariale',
            'aff_rap_exp_rem'        => 'Rapport expérience rémunération',
            'aff_critere_spe'        => 'Critères spécifiques'
        ));
    }
}

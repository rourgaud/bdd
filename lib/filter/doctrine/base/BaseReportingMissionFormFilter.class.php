<?php

/**
 * ReportingMission filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReportingMissionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mission_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mission'), 'add_empty' => true)),
      'nb_candidat'               => new sfWidgetFormFilterInput(),
      'nb_societe'                => new sfWidgetFormFilterInput(),
      'rem_moy'                   => new sfWidgetFormFilterInput(),
      'rem_max'                   => new sfWidgetFormFilterInput(),
      'id_cand_max'               => new sfWidgetFormFilterInput(),
      'rem_min'                   => new sfWidgetFormFilterInput(),
      'id_cand_min'               => new sfWidgetFormFilterInput(),
      'formation_pourcent'        => new sfWidgetFormFilterInput(),
      'age_graph'                 => new sfWidgetFormFilterInput(),
      'secteur_pourcent'          => new sfWidgetFormFilterInput(),
      'loc_pourcent'              => new sfWidgetFormFilterInput(),
      'sexe_pourcent'             => new sfWidgetFormFilterInput(),
      'inoutbu_pourcent'          => new sfWidgetFormFilterInput(),
      'mediane_salariale'         => new sfWidgetFormFilterInput(),
      'rap_exp_rem'               => new sfWidgetFormFilterInput(),
      'critere_spe'               => new sfWidgetFormFilterInput(),
      'aff_mission_id'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_nb_candidat'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_nb_societe'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_rem_moy'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_rem_max'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_age_cand_max'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_formation_cand_max'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_societe_prov_cand_max' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_rem_min'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_age_cand_min'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_formation_cand_min'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_societe_prov_cand_min' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_formation_pourcent'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_age_graph'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_secteur_pourcent'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_loc_pourcent'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_sexe'                  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_inoutbu_pourcent'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_mediane_salariale'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_rap_exp_rem'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_critere_spe'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'utilisateur_id'            => new sfWidgetFormFilterInput(),
      'saved'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'mission_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mission'), 'column' => 'id')),
      'nb_candidat'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nb_societe'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rem_moy'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rem_max'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_cand_max'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rem_min'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_cand_min'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'formation_pourcent'        => new sfValidatorPass(array('required' => false)),
      'age_graph'                 => new sfValidatorPass(array('required' => false)),
      'secteur_pourcent'          => new sfValidatorPass(array('required' => false)),
      'loc_pourcent'              => new sfValidatorPass(array('required' => false)),
      'sexe_pourcent'             => new sfValidatorPass(array('required' => false)),
      'inoutbu_pourcent'          => new sfValidatorPass(array('required' => false)),
      'mediane_salariale'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rap_exp_rem'               => new sfValidatorPass(array('required' => false)),
      'critere_spe'               => new sfValidatorPass(array('required' => false)),
      'aff_mission_id'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_nb_candidat'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_nb_societe'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_rem_moy'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_rem_max'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_age_cand_max'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_formation_cand_max'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_societe_prov_cand_max' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_rem_min'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_age_cand_min'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_formation_cand_min'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_societe_prov_cand_min' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_formation_pourcent'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_age_graph'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_secteur_pourcent'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_loc_pourcent'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_sexe'                  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_inoutbu_pourcent'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_mediane_salariale'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_rap_exp_rem'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_critere_spe'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'utilisateur_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'saved'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('reporting_mission_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ReportingMission';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'mission_id'                => 'ForeignKey',
      'nb_candidat'               => 'Number',
      'nb_societe'                => 'Number',
      'rem_moy'                   => 'Number',
      'rem_max'                   => 'Number',
      'id_cand_max'               => 'Number',
      'rem_min'                   => 'Number',
      'id_cand_min'               => 'Number',
      'formation_pourcent'        => 'Text',
      'age_graph'                 => 'Text',
      'secteur_pourcent'          => 'Text',
      'loc_pourcent'              => 'Text',
      'sexe_pourcent'             => 'Text',
      'inoutbu_pourcent'          => 'Text',
      'mediane_salariale'         => 'Number',
      'rap_exp_rem'               => 'Text',
      'critere_spe'               => 'Text',
      'aff_mission_id'            => 'Boolean',
      'aff_nb_candidat'           => 'Boolean',
      'aff_nb_societe'            => 'Boolean',
      'aff_rem_moy'               => 'Boolean',
      'aff_rem_max'               => 'Boolean',
      'aff_age_cand_max'          => 'Boolean',
      'aff_formation_cand_max'    => 'Boolean',
      'aff_societe_prov_cand_max' => 'Boolean',
      'aff_rem_min'               => 'Boolean',
      'aff_age_cand_min'          => 'Boolean',
      'aff_formation_cand_min'    => 'Boolean',
      'aff_societe_prov_cand_min' => 'Boolean',
      'aff_formation_pourcent'    => 'Boolean',
      'aff_age_graph'             => 'Boolean',
      'aff_secteur_pourcent'      => 'Boolean',
      'aff_loc_pourcent'          => 'Boolean',
      'aff_sexe'                  => 'Boolean',
      'aff_inoutbu_pourcent'      => 'Boolean',
      'aff_mediane_salariale'     => 'Boolean',
      'aff_rap_exp_rem'           => 'Boolean',
      'aff_critere_spe'           => 'Boolean',
      'utilisateur_id'            => 'Number',
      'saved'                     => 'Boolean',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
    );
  }
}

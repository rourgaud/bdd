<?php

/**
 * ReportingMission form base class.
 *
 * @method ReportingMission getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReportingMissionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'mission_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mission'), 'add_empty' => true)),
      'nb_candidat'               => new sfWidgetFormInputText(),
      'nb_societe'                => new sfWidgetFormInputText(),
      'rem_moy'                   => new sfWidgetFormInputText(),
      'rem_max'                   => new sfWidgetFormInputText(),
      'id_cand_max'               => new sfWidgetFormInputText(),
      'rem_min'                   => new sfWidgetFormInputText(),
      'id_cand_min'               => new sfWidgetFormInputText(),
      'formation_pourcent'        => new sfWidgetFormTextarea(),
      'age_graph'                 => new sfWidgetFormTextarea(),
      'secteur_pourcent'          => new sfWidgetFormTextarea(),
      'loc_pourcent'              => new sfWidgetFormTextarea(),
      'sexe_pourcent'             => new sfWidgetFormTextarea(),
      'inoutbu_pourcent'          => new sfWidgetFormTextarea(),
      'mediane_salariale'         => new sfWidgetFormInputText(),
      'rap_exp_rem'               => new sfWidgetFormTextarea(),
      'critere_spe'               => new sfWidgetFormTextarea(),
      'aff_mission_id'            => new sfWidgetFormInputCheckbox(),
      'aff_nb_candidat'           => new sfWidgetFormInputCheckbox(),
      'aff_nb_societe'            => new sfWidgetFormInputCheckbox(),
      'aff_rem_moy'               => new sfWidgetFormInputCheckbox(),
      'aff_rem_max'               => new sfWidgetFormInputCheckbox(),
      'aff_age_cand_max'          => new sfWidgetFormInputCheckbox(),
      'aff_formation_cand_max'    => new sfWidgetFormInputCheckbox(),
      'aff_societe_prov_cand_max' => new sfWidgetFormInputCheckbox(),
      'aff_rem_min'               => new sfWidgetFormInputCheckbox(),
      'aff_age_cand_min'          => new sfWidgetFormInputCheckbox(),
      'aff_formation_cand_min'    => new sfWidgetFormInputCheckbox(),
      'aff_societe_prov_cand_min' => new sfWidgetFormInputCheckbox(),
      'aff_formation_pourcent'    => new sfWidgetFormInputCheckbox(),
      'aff_age_graph'             => new sfWidgetFormInputCheckbox(),
      'aff_secteur_pourcent'      => new sfWidgetFormInputCheckbox(),
      'aff_loc_pourcent'          => new sfWidgetFormInputCheckbox(),
      'aff_sexe'                  => new sfWidgetFormInputCheckbox(),
      'aff_inoutbu_pourcent'      => new sfWidgetFormInputCheckbox(),
      'aff_mediane_salariale'     => new sfWidgetFormInputCheckbox(),
      'aff_rap_exp_rem'           => new sfWidgetFormInputCheckbox(),
      'aff_critere_spe'           => new sfWidgetFormInputCheckbox(),
      'utilisateur_id'            => new sfWidgetFormInputText(),
      'saved'                     => new sfWidgetFormInputCheckbox(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'mission_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mission'), 'required' => false)),
      'nb_candidat'               => new sfValidatorInteger(array('required' => false)),
      'nb_societe'                => new sfValidatorInteger(array('required' => false)),
      'rem_moy'                   => new sfValidatorInteger(array('required' => false)),
      'rem_max'                   => new sfValidatorInteger(array('required' => false)),
      'id_cand_max'               => new sfValidatorInteger(array('required' => false)),
      'rem_min'                   => new sfValidatorInteger(array('required' => false)),
      'id_cand_min'               => new sfValidatorInteger(array('required' => false)),
      'formation_pourcent'        => new sfValidatorString(array('required' => false)),
      'age_graph'                 => new sfValidatorString(array('required' => false)),
      'secteur_pourcent'          => new sfValidatorString(array('required' => false)),
      'loc_pourcent'              => new sfValidatorString(array('required' => false)),
      'sexe_pourcent'             => new sfValidatorString(array('required' => false)),
      'inoutbu_pourcent'          => new sfValidatorString(array('required' => false)),
      'mediane_salariale'         => new sfValidatorInteger(array('required' => false)),
      'rap_exp_rem'               => new sfValidatorString(array('required' => false)),
      'critere_spe'               => new sfValidatorString(array('required' => false)),
      'aff_mission_id'            => new sfValidatorBoolean(array('required' => false)),
      'aff_nb_candidat'           => new sfValidatorBoolean(array('required' => false)),
      'aff_nb_societe'            => new sfValidatorBoolean(array('required' => false)),
      'aff_rem_moy'               => new sfValidatorBoolean(array('required' => false)),
      'aff_rem_max'               => new sfValidatorBoolean(array('required' => false)),
      'aff_age_cand_max'          => new sfValidatorBoolean(array('required' => false)),
      'aff_formation_cand_max'    => new sfValidatorBoolean(array('required' => false)),
      'aff_societe_prov_cand_max' => new sfValidatorBoolean(array('required' => false)),
      'aff_rem_min'               => new sfValidatorBoolean(array('required' => false)),
      'aff_age_cand_min'          => new sfValidatorBoolean(array('required' => false)),
      'aff_formation_cand_min'    => new sfValidatorBoolean(array('required' => false)),
      'aff_societe_prov_cand_min' => new sfValidatorBoolean(array('required' => false)),
      'aff_formation_pourcent'    => new sfValidatorBoolean(array('required' => false)),
      'aff_age_graph'             => new sfValidatorBoolean(array('required' => false)),
      'aff_secteur_pourcent'      => new sfValidatorBoolean(array('required' => false)),
      'aff_loc_pourcent'          => new sfValidatorBoolean(array('required' => false)),
      'aff_sexe'                  => new sfValidatorBoolean(array('required' => false)),
      'aff_inoutbu_pourcent'      => new sfValidatorBoolean(array('required' => false)),
      'aff_mediane_salariale'     => new sfValidatorBoolean(array('required' => false)),
      'aff_rap_exp_rem'           => new sfValidatorBoolean(array('required' => false)),
      'aff_critere_spe'           => new sfValidatorBoolean(array('required' => false)),
      'utilisateur_id'            => new sfValidatorInteger(array('required' => false)),
      'saved'                     => new sfValidatorBoolean(array('required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('reporting_mission[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ReportingMission';
  }

}

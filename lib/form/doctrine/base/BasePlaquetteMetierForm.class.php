<?php

/**
 * PlaquetteMetier form base class.
 *
 * @method PlaquetteMetier getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePlaquetteMetierForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'intitule_post'             => new sfWidgetFormTextarea(),
      'nb_candidat'               => new sfWidgetFormInputText(),
      'rem_moy'                   => new sfWidgetFormInputText(),
      'rem_max'                   => new sfWidgetFormInputText(),
      'id_cand_max'               => new sfWidgetFormInputText(),
      'rem_min'                   => new sfWidgetFormInputText(),
      'id_cand_min'               => new sfWidgetFormInputText(),
      'secteur_pourcent'          => new sfWidgetFormInputText(),
      'formation_pourcent'        => new sfWidgetFormTextarea(),
      'loc_pourcent'              => new sfWidgetFormTextarea(),
      'age_moy'                   => new sfWidgetFormInputText(),
      'age_min'                   => new sfWidgetFormInputText(),
      'age_max'                   => new sfWidgetFormInputText(),
      'taux_reussite'             => new sfWidgetFormInputText(),
      'commentaire'               => new sfWidgetFormTextarea(),
      'aff_intitule_post'         => new sfWidgetFormInputCheckbox(),
      'aff_nb_candidat'           => new sfWidgetFormInputCheckbox(),
      'aff_rem_moy'               => new sfWidgetFormInputCheckbox(),
      'aff_rem_max'               => new sfWidgetFormInputCheckbox(),
      'aff_age_cand_max'          => new sfWidgetFormInputCheckbox(),
      'aff_formation_cand_max'    => new sfWidgetFormInputCheckbox(),
      'aff_societe_prov_cand_max' => new sfWidgetFormInputCheckbox(),
      'aff_rem_min'               => new sfWidgetFormInputCheckbox(),
      'aff_age_cand_min'          => new sfWidgetFormInputCheckbox(),
      'aff_formation_cand_min'    => new sfWidgetFormInputCheckbox(),
      'aff_societe_prov_cand_min' => new sfWidgetFormInputCheckbox(),
      'aff_secteur_pourcent'      => new sfWidgetFormInputCheckbox(),
      'aff_formation_pourcent'    => new sfWidgetFormInputCheckbox(),
      'aff_loc_pourcent'          => new sfWidgetFormInputCheckbox(),
      'aff_age_moy'               => new sfWidgetFormInputCheckbox(),
      'aff_age_min'               => new sfWidgetFormInputCheckbox(),
      'aff_age_max'               => new sfWidgetFormInputCheckbox(),
      'aff_commentaire'           => new sfWidgetFormInputCheckbox(),
      'utilisateur_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
      'saved'                     => new sfWidgetFormInputCheckbox(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'intitule_post'             => new sfValidatorString(),
      'nb_candidat'               => new sfValidatorInteger(array('required' => false)),
      'rem_moy'                   => new sfValidatorInteger(array('required' => false)),
      'rem_max'                   => new sfValidatorInteger(array('required' => false)),
      'id_cand_max'               => new sfValidatorInteger(array('required' => false)),
      'rem_min'                   => new sfValidatorInteger(array('required' => false)),
      'id_cand_min'               => new sfValidatorInteger(array('required' => false)),
      'secteur_pourcent'          => new sfValidatorInteger(array('required' => false)),
      'formation_pourcent'        => new sfValidatorString(array('required' => false)),
      'loc_pourcent'              => new sfValidatorString(array('required' => false)),
      'age_moy'                   => new sfValidatorInteger(array('required' => false)),
      'age_min'                   => new sfValidatorInteger(array('required' => false)),
      'age_max'                   => new sfValidatorInteger(array('required' => false)),
      'taux_reussite'             => new sfValidatorInteger(array('required' => false)),
      'commentaire'               => new sfValidatorString(array('required' => false)),
      'aff_intitule_post'         => new sfValidatorBoolean(array('required' => false)),
      'aff_nb_candidat'           => new sfValidatorBoolean(array('required' => false)),
      'aff_rem_moy'               => new sfValidatorBoolean(array('required' => false)),
      'aff_rem_max'               => new sfValidatorBoolean(array('required' => false)),
      'aff_age_cand_max'          => new sfValidatorBoolean(array('required' => false)),
      'aff_formation_cand_max'    => new sfValidatorBoolean(array('required' => false)),
      'aff_societe_prov_cand_max' => new sfValidatorBoolean(array('required' => false)),
      'aff_rem_min'               => new sfValidatorBoolean(array('required' => false)),
      'aff_age_cand_min'          => new sfValidatorBoolean(array('required' => false)),
      'aff_formation_cand_min'    => new sfValidatorBoolean(array('required' => false)),
      'aff_societe_prov_cand_min' => new sfValidatorBoolean(array('required' => false)),
      'aff_secteur_pourcent'      => new sfValidatorBoolean(array('required' => false)),
      'aff_formation_pourcent'    => new sfValidatorBoolean(array('required' => false)),
      'aff_loc_pourcent'          => new sfValidatorBoolean(array('required' => false)),
      'aff_age_moy'               => new sfValidatorBoolean(array('required' => false)),
      'aff_age_min'               => new sfValidatorBoolean(array('required' => false)),
      'aff_age_max'               => new sfValidatorBoolean(array('required' => false)),
      'aff_commentaire'           => new sfValidatorBoolean(array('required' => false)),
      'utilisateur_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'required' => false)),
      'saved'                     => new sfValidatorBoolean(array('required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('plaquette_metier[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PlaquetteMetier';
  }

}

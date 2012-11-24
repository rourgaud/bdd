<?php

/**
 * PlaquetteSecteur form base class.
 *
 * @method PlaquetteSecteur getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePlaquetteSecteurForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'secteur'               => new sfWidgetFormTextarea(),
      'nb_candidat'           => new sfWidgetFormInputText(),
      'nb_societe'            => new sfWidgetFormInputText(),
      'nb_mission'            => new sfWidgetFormInputText(),
      'poste'                 => new sfWidgetFormTextarea(),
      'client'                => new sfWidgetFormTextarea(),
      'mediane_salariale'     => new sfWidgetFormInputText(),
      'loc_pourcent'          => new sfWidgetFormTextarea(),
      'taux_reussite'         => new sfWidgetFormInputText(),
      'aff_secteur'           => new sfWidgetFormInputCheckbox(),
      'aff_nb_candidat'       => new sfWidgetFormInputCheckbox(),
      'aff_nb_societe'        => new sfWidgetFormInputCheckbox(),
      'aff_nb_mission'        => new sfWidgetFormInputCheckbox(),
      'aff_poste'             => new sfWidgetFormInputCheckbox(),
      'aff_client'            => new sfWidgetFormInputCheckbox(),
      'aff_mediane_salariale' => new sfWidgetFormInputCheckbox(),
      'aff_loc_pourcent'      => new sfWidgetFormInputCheckbox(),
      'aff_taux_reussite'     => new sfWidgetFormInputCheckbox(),
      'utilisateur_id'        => new sfWidgetFormInputText(),
      'saved'                 => new sfWidgetFormInputCheckbox(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'secteur'               => new sfValidatorString(),
      'nb_candidat'           => new sfValidatorInteger(array('required' => false)),
      'nb_societe'            => new sfValidatorInteger(array('required' => false)),
      'nb_mission'            => new sfValidatorInteger(array('required' => false)),
      'poste'                 => new sfValidatorString(array('required' => false)),
      'client'                => new sfValidatorString(array('required' => false)),
      'mediane_salariale'     => new sfValidatorInteger(array('required' => false)),
      'loc_pourcent'          => new sfValidatorString(array('required' => false)),
      'taux_reussite'         => new sfValidatorInteger(array('required' => false)),
      'aff_secteur'           => new sfValidatorBoolean(array('required' => false)),
      'aff_nb_candidat'       => new sfValidatorBoolean(array('required' => false)),
      'aff_nb_societe'        => new sfValidatorBoolean(array('required' => false)),
      'aff_nb_mission'        => new sfValidatorBoolean(array('required' => false)),
      'aff_poste'             => new sfValidatorBoolean(array('required' => false)),
      'aff_client'            => new sfValidatorBoolean(array('required' => false)),
      'aff_mediane_salariale' => new sfValidatorBoolean(array('required' => false)),
      'aff_loc_pourcent'      => new sfValidatorBoolean(array('required' => false)),
      'aff_taux_reussite'     => new sfValidatorBoolean(array('required' => false)),
      'utilisateur_id'        => new sfValidatorInteger(array('required' => false)),
      'saved'                 => new sfValidatorBoolean(array('required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('plaquette_secteur[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PlaquetteSecteur';
  }

}

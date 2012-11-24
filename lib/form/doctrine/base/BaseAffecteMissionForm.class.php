<?php

/**
 * AffecteMission form base class.
 *
 * @method AffecteMission getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAffecteMissionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mission_id'     => new sfWidgetFormInputHidden(),
      'utilisateur_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'mission_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('mission_id')), 'empty_value' => $this->getObject()->get('mission_id'), 'required' => false)),
      'utilisateur_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('utilisateur_id')), 'empty_value' => $this->getObject()->get('utilisateur_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('affecte_mission[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AffecteMission';
  }

}

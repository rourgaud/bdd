<?php

/**
 * Mission form base class.
 *
 * @method Mission getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMissionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'client'            => new sfWidgetFormInputText(),
      'intituleposte'     => new sfWidgetFormInputText(),
      'secteur'           => new sfWidgetFormInputText(),
      'zonegeographique'  => new sfWidgetFormInputText(),
      'fonction'          => new sfWidgetFormInputText(),
      'niveauformation'   => new sfWidgetFormInputText(),
      'remunerationmin'   => new sfWidgetFormInputText(),
      'remunerationmax'   => new sfWidgetFormInputText(),
      'agemin'            => new sfWidgetFormInputText(),
      'agemax'            => new sfWidgetFormInputText(),
      'experiencemin'     => new sfWidgetFormInputText(),
      'experiencemax'     => new sfWidgetFormInputText(),
      'datedebut'         => new sfWidgetFormDate(),
      'datefin'           => new sfWidgetFormDate(),
      'nbcandidats'       => new sfWidgetFormInputText(),
      'commentaire'       => new sfWidgetFormInputText(),
      'statut_mission_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'client'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'intituleposte'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'secteur'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'zonegeographique'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fonction'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'niveauformation'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'remunerationmin'   => new sfValidatorNumber(array('required' => false)),
      'remunerationmax'   => new sfValidatorNumber(array('required' => false)),
      'agemin'            => new sfValidatorInteger(array('required' => false)),
      'agemax'            => new sfValidatorInteger(array('required' => false)),
      'experiencemin'     => new sfValidatorInteger(array('required' => false)),
      'experiencemax'     => new sfValidatorInteger(array('required' => false)),
      'datedebut'         => new sfValidatorDate(array('required' => false)),
      'datefin'           => new sfValidatorDate(array('required' => false)),
      'nbcandidats'       => new sfValidatorInteger(array('required' => false)),
      'commentaire'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'statut_mission_id' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mission[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mission';
  }

}

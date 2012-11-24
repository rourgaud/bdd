<?php

/**
 * MotsFormation form base class.
 *
 * @method MotsFormation getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMotsFormationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'mot'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mots'), 'add_empty' => false)),
      'formation_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Formation'), 'add_empty' => false)),
      'poids'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'mot'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mots'), 'required' => false)),
      'formation_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Formation'), 'required' => false)),
      'poids'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mots_formation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MotsFormation';
  }

}

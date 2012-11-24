<?php

/**
 * FeuilleCheck form base class.
 *
 * @method FeuilleCheck getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFeuilleCheckForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'critere'    => new sfWidgetFormInputText(),
      'valeur'     => new sfWidgetFormInputText(),
      'ordre'      => new sfWidgetFormInputText(),
      'mission_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mission'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'critere'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'valeur'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ordre'      => new sfValidatorInteger(array('required' => false)),
      'mission_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mission'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('feuille_check[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FeuilleCheck';
  }

}

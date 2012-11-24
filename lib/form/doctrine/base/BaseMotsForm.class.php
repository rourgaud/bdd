<?php

/**
 * Mots form base class.
 *
 * @method Mots getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMotsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mot' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'mot' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('mot')), 'empty_value' => $this->getObject()->get('mot'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mots[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mots';
  }

}

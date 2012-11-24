<?php

/**
 * CtrlLangue form base class.
 *
 * @method CtrlLangue getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCtrlLangueForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'langue' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'langue' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('langue')), 'empty_value' => $this->getObject()->get('langue'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctrl_langue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrlLangue';
  }

}

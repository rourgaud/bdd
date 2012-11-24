<?php

/**
 * CtrlSource form base class.
 *
 * @method CtrlSource getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCtrlSourceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'source' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'source' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('source')), 'empty_value' => $this->getObject()->get('source'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctrl_source[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrlSource';
  }

}

<?php

/**
 * CtrlFonction form base class.
 *
 * @method CtrlFonction getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCtrlFonctionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fonction' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'fonction' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('fonction')), 'empty_value' => $this->getObject()->get('fonction'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctrl_fonction[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrlFonction';
  }

}

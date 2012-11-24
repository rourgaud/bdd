<?php

/**
 * CtrlNiveauFormation form base class.
 *
 * @method CtrlNiveauFormation getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCtrlNiveauFormationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'niveauformation' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'niveauformation' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('niveauformation')), 'empty_value' => $this->getObject()->get('niveauformation'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctrl_niveau_formation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrlNiveauFormation';
  }

}

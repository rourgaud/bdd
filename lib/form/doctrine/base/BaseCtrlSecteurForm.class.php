<?php

/**
 * CtrlSecteur form base class.
 *
 * @method CtrlSecteur getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCtrlSecteurForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'secteur' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'secteur' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('secteur')), 'empty_value' => $this->getObject()->get('secteur'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctrl_secteur[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrlSecteur';
  }

}

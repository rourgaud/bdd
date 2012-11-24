<?php

/**
 * CtrlZoneGeographique form base class.
 *
 * @method CtrlZoneGeographique getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCtrlZoneGeographiqueForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'zonegeographique' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'zonegeographique' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('zonegeographique')), 'empty_value' => $this->getObject()->get('zonegeographique'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctrl_zone_geographique[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrlZoneGeographique';
  }

}

<?php

/**
 * CritereLibre form base class.
 *
 * @method CritereLibre getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCritereLibreForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'libelle'    => new sfWidgetFormInputText(),
      'mission_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mission'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'libelle'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'mission_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mission'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('critere_libre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CritereLibre';
  }

}

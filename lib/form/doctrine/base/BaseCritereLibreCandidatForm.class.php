<?php

/**
 * CritereLibreCandidat form base class.
 *
 * @method CritereLibreCandidat getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCritereLibreCandidatForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'candidat_id'      => new sfWidgetFormInputHidden(),
      'critere_libre_id' => new sfWidgetFormInputHidden(),
      'valide'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'candidat_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('candidat_id')), 'empty_value' => $this->getObject()->get('candidat_id'), 'required' => false)),
      'critere_libre_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('critere_libre_id')), 'empty_value' => $this->getObject()->get('critere_libre_id'), 'required' => false)),
      'valide'           => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('critere_libre_candidat[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CritereLibreCandidat';
  }

}

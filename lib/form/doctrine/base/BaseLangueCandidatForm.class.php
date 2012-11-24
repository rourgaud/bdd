<?php

/**
 * LangueCandidat form base class.
 *
 * @method LangueCandidat getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLangueCandidatForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'candidat_id' => new sfWidgetFormInputHidden(),
      'langue'      => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'candidat_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('candidat_id')), 'empty_value' => $this->getObject()->get('candidat_id'), 'required' => false)),
      'langue'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('langue')), 'empty_value' => $this->getObject()->get('langue'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('langue_candidat[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LangueCandidat';
  }

}

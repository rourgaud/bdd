<?php

/**
 * Formation form base class.
 *
 * @method Formation getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'candidat_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Candidat'), 'add_empty' => false)),
      'niveauformation' => new sfWidgetFormInputText(),
      'ecole'           => new sfWidgetFormInputText(),
      'ville'           => new sfWidgetFormInputText(),
      'pays'            => new sfWidgetFormInputText(),
      'datediplome'     => new sfWidgetFormDate(),
      'commentaire'     => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'candidat_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Candidat'), 'required' => false)),
      'niveauformation' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ecole'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ville'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pays'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'datediplome'     => new sfValidatorDate(array('required' => false)),
      'commentaire'     => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formation';
  }

}

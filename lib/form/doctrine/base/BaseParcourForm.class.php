<?php

/**
 * Parcour form base class.
 *
 * @method Parcour getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseParcourForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'candidat_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Candidat'), 'add_empty' => false)),
      'societe'            => new sfWidgetFormInputText(),
      'effectifsociete'    => new sfWidgetFormInputText(),
      'zonegeographique'   => new sfWidgetFormInputText(),
      'fonction'           => new sfWidgetFormInputText(),
      'intitule'           => new sfWidgetFormInputText(),
      'secteur'            => new sfWidgetFormInputText(),
      'remuneration'       => new sfWidgetFormInputText(),
      'detailremuneration' => new sfWidgetFormInputText(),
      'datedebut'          => new sfWidgetFormDate(),
      'datefin'            => new sfWidgetFormDate(),
      'commentaire'        => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'candidat_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Candidat'), 'required' => false)),
      'societe'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'effectifsociete'    => new sfValidatorInteger(array('required' => false)),
      'zonegeographique'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fonction'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'intitule'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'secteur'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'remuneration'       => new sfValidatorNumber(array('required' => false)),
      'detailremuneration' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'datedebut'          => new sfValidatorDate(array('required' => false)),
      'datefin'            => new sfValidatorDate(array('required' => false)),
      'commentaire'        => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('parcour[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Parcour';
  }

}

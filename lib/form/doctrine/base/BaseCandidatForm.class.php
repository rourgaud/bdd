<?php

/**
 * Candidat form base class.
 *
 * @method Candidat getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCandidatForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'civilite_id'                => new sfWidgetFormInputText(),
      'nom'                        => new sfWidgetFormInputText(),
      'prenom'                     => new sfWidgetFormInputText(),
      'tellignedirecte'            => new sfWidgetFormInputText(),
      'telstandard'                => new sfWidgetFormInputText(),
      'telmobilepro'               => new sfWidgetFormInputText(),
      'telmobileperso'             => new sfWidgetFormInputText(),
      'teldomicile'                => new sfWidgetFormInputText(),
      'email'                      => new sfWidgetFormInputText(),
      'datenaissance'              => new sfWidgetFormDate(),
      'dateexperience'             => new sfWidgetFormDate(),
      'commentaire'                => new sfWidgetFormTextarea(),
      'commentairechargerecherche' => new sfWidgetFormTextarea(),
      'competencesinformatiques'   => new sfWidgetFormTextarea(),
      'cv'                         => new sfWidgetFormInputText(),
      'dossier'                    => new sfWidgetFormInputText(),
      'source'                     => new sfWidgetFormInputText(),
      'place'                      => new sfWidgetFormInputText(),
      'valid'                      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'civilite_id'                => new sfValidatorInteger(array('required' => false)),
      'nom'                        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'prenom'                     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tellignedirecte'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'telstandard'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'telmobilepro'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'telmobileperso'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'teldomicile'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'                      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'datenaissance'              => new sfValidatorDate(array('required' => false)),
      'dateexperience'             => new sfValidatorDate(array('required' => false)),
      'commentaire'                => new sfValidatorString(array('required' => false)),
      'commentairechargerecherche' => new sfValidatorString(array('required' => false)),
      'competencesinformatiques'   => new sfValidatorString(array('required' => false)),
      'cv'                         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dossier'                    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'source'                     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'place'                      => new sfValidatorInteger(array('required' => false)),
      'valid'                      => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('candidat[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Candidat';
  }

}

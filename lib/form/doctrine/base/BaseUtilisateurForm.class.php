<?php

/**
 * Utilisateur form base class.
 *
 * @method Utilisateur getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUtilisateurForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'username'  => new sfWidgetFormInputText(),
      'password'  => new sfWidgetFormInputText(),
      'nom'       => new sfWidgetFormInputText(),
      'prenom'    => new sfWidgetFormInputText(),
      'createdat' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'username'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'password'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nom'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'prenom'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'createdat' => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('utilisateur[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Utilisateur';
  }

}

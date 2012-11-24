<?php

/**
 * TableauChasse form base class.
 *
 * @method TableauChasse getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTableauChasseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mission_id'           => new sfWidgetFormInputHidden(),
      'candidat_id'          => new sfWidgetFormInputHidden(),
      'contactepar'          => new sfWidgetFormInputText(),
      'contactele'           => new sfWidgetFormDate(),
      'commentairecontact'   => new sfWidgetFormInputText(),
      'rencontrepar'         => new sfWidgetFormInputText(),
      'rencontrele'          => new sfWidgetFormDate(),
      'commentairerencontre' => new sfWidgetFormInputText(),
      'commentaire'          => new sfWidgetFormTextarea(),
      'criteres_specifiques' => new sfWidgetFormTextarea(),
      'ctrl_statut_id'       => new sfWidgetFormInputText(),
      'shortliste'           => new sfWidgetFormInputText(),
      'coutextesociete'      => new sfWidgetFormInputText(),
      'coufondsociete'       => new sfWidgetFormInputText(),
      'coutextecandidat'     => new sfWidgetFormInputText(),
      'coufondcandidat'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'mission_id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('mission_id')), 'empty_value' => $this->getObject()->get('mission_id'), 'required' => false)),
      'candidat_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('candidat_id')), 'empty_value' => $this->getObject()->get('candidat_id'), 'required' => false)),
      'contactepar'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'contactele'           => new sfValidatorDate(array('required' => false)),
      'commentairecontact'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'rencontrepar'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'rencontrele'          => new sfValidatorDate(array('required' => false)),
      'commentairerencontre' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'commentaire'          => new sfValidatorString(array('required' => false)),
      'criteres_specifiques' => new sfValidatorString(array('required' => false)),
      'ctrl_statut_id'       => new sfValidatorInteger(array('required' => false)),
      'shortliste'           => new sfValidatorInteger(array('required' => false)),
      'coutextesociete'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'coufondsociete'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'coutextecandidat'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'coufondcandidat'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tableau_chasse[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TableauChasse';
  }

}

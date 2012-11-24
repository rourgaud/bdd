<?php

/**
 * Tache form base class.
 *
 * @method Tache getObject() Returns the current form's model object
 *
 * @package    opsearch-app
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTacheForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'titre'          => new sfWidgetFormInputText(),
      'commentaire'    => new sfWidgetFormTextarea(),
      'affecte_le'     => new sfWidgetFormDate(),
      'affecte_a_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => false)),
      'affecte_par_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur_2'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'titre'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'commentaire'    => new sfValidatorString(array('required' => false)),
      'affecte_le'     => new sfValidatorDate(array('required' => false)),
      'affecte_a_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'required' => false)),
      'affecte_par_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur_2'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tache[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tache';
  }

}

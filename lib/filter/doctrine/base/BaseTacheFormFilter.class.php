<?php

/**
 * Tache filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTacheFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titre'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'commentaire'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'affecte_le'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'affecte_a_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
      'affecte_par_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur_2'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'titre'          => new sfValidatorPass(array('required' => false)),
      'commentaire'    => new sfValidatorPass(array('required' => false)),
      'affecte_le'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'affecte_a_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id')),
      'affecte_par_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur_2'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('tache_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tache';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'titre'          => 'Text',
      'commentaire'    => 'Text',
      'affecte_le'     => 'Date',
      'affecte_a_id'   => 'ForeignKey',
      'affecte_par_id' => 'ForeignKey',
    );
  }
}

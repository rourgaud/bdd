<?php

/**
 * Formation filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFormationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'candidat_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Candidat'), 'add_empty' => true)),
      'niveauformation' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ecole'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ville'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pays'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datediplome'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'commentaire'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'candidat_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Candidat'), 'column' => 'id')),
      'niveauformation' => new sfValidatorPass(array('required' => false)),
      'ecole'           => new sfValidatorPass(array('required' => false)),
      'ville'           => new sfValidatorPass(array('required' => false)),
      'pays'            => new sfValidatorPass(array('required' => false)),
      'datediplome'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'commentaire'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formation';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'candidat_id'     => 'ForeignKey',
      'niveauformation' => 'Text',
      'ecole'           => 'Text',
      'ville'           => 'Text',
      'pays'            => 'Text',
      'datediplome'     => 'Date',
      'commentaire'     => 'Text',
    );
  }
}

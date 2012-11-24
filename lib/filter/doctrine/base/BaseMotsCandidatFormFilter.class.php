<?php

/**
 * MotsCandidat filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMotsCandidatFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mot'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mots'), 'add_empty' => true)),
      'candidat_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Candidat'), 'add_empty' => true)),
      'poids'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'mot'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mots'), 'column' => 'mot')),
      'candidat_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Candidat'), 'column' => 'id')),
      'poids'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('mots_candidat_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MotsCandidat';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'mot'         => 'ForeignKey',
      'candidat_id' => 'ForeignKey',
      'poids'       => 'Number',
    );
  }
}

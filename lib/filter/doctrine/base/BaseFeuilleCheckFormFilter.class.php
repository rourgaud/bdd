<?php

/**
 * FeuilleCheck filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFeuilleCheckFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'critere'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valeur'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ordre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mission_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mission'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'critere'    => new sfValidatorPass(array('required' => false)),
      'valeur'     => new sfValidatorPass(array('required' => false)),
      'ordre'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mission_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mission'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('feuille_check_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FeuilleCheck';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'critere'    => 'Text',
      'valeur'     => 'Text',
      'ordre'      => 'Number',
      'mission_id' => 'ForeignKey',
    );
  }
}

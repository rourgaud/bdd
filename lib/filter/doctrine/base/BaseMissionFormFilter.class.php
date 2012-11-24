<?php

/**
 * Mission filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMissionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'client'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'intituleposte'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'secteur'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'zonegeographique'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fonction'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'niveauformation'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'remunerationmin'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'remunerationmax'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agemin'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agemax'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'experiencemin'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'experiencemax'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datedebut'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'datefin'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'nbcandidats'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'commentaire'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'statut_mission_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'client'            => new sfValidatorPass(array('required' => false)),
      'intituleposte'     => new sfValidatorPass(array('required' => false)),
      'secteur'           => new sfValidatorPass(array('required' => false)),
      'zonegeographique'  => new sfValidatorPass(array('required' => false)),
      'fonction'          => new sfValidatorPass(array('required' => false)),
      'niveauformation'   => new sfValidatorPass(array('required' => false)),
      'remunerationmin'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'remunerationmax'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'agemin'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'agemax'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'experiencemin'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'experiencemax'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'datedebut'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'datefin'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'nbcandidats'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'commentaire'       => new sfValidatorPass(array('required' => false)),
      'statut_mission_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('mission_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mission';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'client'            => 'Text',
      'intituleposte'     => 'Text',
      'secteur'           => 'Text',
      'zonegeographique'  => 'Text',
      'fonction'          => 'Text',
      'niveauformation'   => 'Text',
      'remunerationmin'   => 'Number',
      'remunerationmax'   => 'Number',
      'agemin'            => 'Number',
      'agemax'            => 'Number',
      'experiencemin'     => 'Number',
      'experiencemax'     => 'Number',
      'datedebut'         => 'Date',
      'datefin'           => 'Date',
      'nbcandidats'       => 'Number',
      'commentaire'       => 'Text',
      'statut_mission_id' => 'Number',
    );
  }
}

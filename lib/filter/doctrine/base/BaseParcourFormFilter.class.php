<?php

/**
 * Parcour filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseParcourFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'candidat_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Candidat'), 'add_empty' => true)),
      'societe'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'effectifsociete'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'zonegeographique'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fonction'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'intitule'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'secteur'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'remuneration'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'detailremuneration' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datedebut'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'datefin'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'commentaire'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'candidat_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Candidat'), 'column' => 'id')),
      'societe'            => new sfValidatorPass(array('required' => false)),
      'effectifsociete'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'zonegeographique'   => new sfValidatorPass(array('required' => false)),
      'fonction'           => new sfValidatorPass(array('required' => false)),
      'intitule'           => new sfValidatorPass(array('required' => false)),
      'secteur'            => new sfValidatorPass(array('required' => false)),
      'remuneration'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'detailremuneration' => new sfValidatorPass(array('required' => false)),
      'datedebut'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'datefin'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'commentaire'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('parcour_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Parcour';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'candidat_id'        => 'ForeignKey',
      'societe'            => 'Text',
      'effectifsociete'    => 'Number',
      'zonegeographique'   => 'Text',
      'fonction'           => 'Text',
      'intitule'           => 'Text',
      'secteur'            => 'Text',
      'remuneration'       => 'Number',
      'detailremuneration' => 'Text',
      'datedebut'          => 'Date',
      'datefin'            => 'Date',
      'commentaire'        => 'Text',
    );
  }
}

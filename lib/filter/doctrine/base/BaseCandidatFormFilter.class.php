<?php

/**
 * Candidat filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCandidatFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'civilite_id'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nom'                        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prenom'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tellignedirecte'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telstandard'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telmobilepro'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telmobileperso'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'teldomicile'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datenaissance'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dateexperience'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'commentaire'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'commentairechargerecherche' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'competencesinformatiques'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cv'                         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dossier'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'source'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'place'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valid'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'civilite_id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nom'                        => new sfValidatorPass(array('required' => false)),
      'prenom'                     => new sfValidatorPass(array('required' => false)),
      'tellignedirecte'            => new sfValidatorPass(array('required' => false)),
      'telstandard'                => new sfValidatorPass(array('required' => false)),
      'telmobilepro'               => new sfValidatorPass(array('required' => false)),
      'telmobileperso'             => new sfValidatorPass(array('required' => false)),
      'teldomicile'                => new sfValidatorPass(array('required' => false)),
      'email'                      => new sfValidatorPass(array('required' => false)),
      'datenaissance'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'dateexperience'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'commentaire'                => new sfValidatorPass(array('required' => false)),
      'commentairechargerecherche' => new sfValidatorPass(array('required' => false)),
      'competencesinformatiques'   => new sfValidatorPass(array('required' => false)),
      'cv'                         => new sfValidatorPass(array('required' => false)),
      'dossier'                    => new sfValidatorPass(array('required' => false)),
      'source'                     => new sfValidatorPass(array('required' => false)),
      'place'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'valid'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('candidat_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Candidat';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'civilite_id'                => 'Number',
      'nom'                        => 'Text',
      'prenom'                     => 'Text',
      'tellignedirecte'            => 'Text',
      'telstandard'                => 'Text',
      'telmobilepro'               => 'Text',
      'telmobileperso'             => 'Text',
      'teldomicile'                => 'Text',
      'email'                      => 'Text',
      'datenaissance'              => 'Date',
      'dateexperience'             => 'Date',
      'commentaire'                => 'Text',
      'commentairechargerecherche' => 'Text',
      'competencesinformatiques'   => 'Text',
      'cv'                         => 'Text',
      'dossier'                    => 'Text',
      'source'                     => 'Text',
      'place'                      => 'Number',
      'valid'                      => 'Number',
    );
  }
}

<?php

/**
 * PlaquetteSecteur filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePlaquetteSecteurFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'secteur'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nb_candidat'           => new sfWidgetFormFilterInput(),
      'nb_societe'            => new sfWidgetFormFilterInput(),
      'nb_mission'            => new sfWidgetFormFilterInput(),
      'poste'                 => new sfWidgetFormFilterInput(),
      'client'                => new sfWidgetFormFilterInput(),
      'mediane_salariale'     => new sfWidgetFormFilterInput(),
      'loc_pourcent'          => new sfWidgetFormFilterInput(),
      'taux_reussite'         => new sfWidgetFormFilterInput(),
      'aff_secteur'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_nb_candidat'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_nb_societe'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_nb_mission'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_poste'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_client'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_mediane_salariale' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_loc_pourcent'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_taux_reussite'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'utilisateur_id'        => new sfWidgetFormFilterInput(),
      'saved'                 => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'secteur'               => new sfValidatorPass(array('required' => false)),
      'nb_candidat'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nb_societe'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nb_mission'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'poste'                 => new sfValidatorPass(array('required' => false)),
      'client'                => new sfValidatorPass(array('required' => false)),
      'mediane_salariale'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'loc_pourcent'          => new sfValidatorPass(array('required' => false)),
      'taux_reussite'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'aff_secteur'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_nb_candidat'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_nb_societe'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_nb_mission'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_poste'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_client'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_mediane_salariale' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_loc_pourcent'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_taux_reussite'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'utilisateur_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'saved'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('plaquette_secteur_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PlaquetteSecteur';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'secteur'               => 'Text',
      'nb_candidat'           => 'Number',
      'nb_societe'            => 'Number',
      'nb_mission'            => 'Number',
      'poste'                 => 'Text',
      'client'                => 'Text',
      'mediane_salariale'     => 'Number',
      'loc_pourcent'          => 'Text',
      'taux_reussite'         => 'Number',
      'aff_secteur'           => 'Boolean',
      'aff_nb_candidat'       => 'Boolean',
      'aff_nb_societe'        => 'Boolean',
      'aff_nb_mission'        => 'Boolean',
      'aff_poste'             => 'Boolean',
      'aff_client'            => 'Boolean',
      'aff_mediane_salariale' => 'Boolean',
      'aff_loc_pourcent'      => 'Boolean',
      'aff_taux_reussite'     => 'Boolean',
      'utilisateur_id'        => 'Number',
      'saved'                 => 'Boolean',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
    );
  }
}

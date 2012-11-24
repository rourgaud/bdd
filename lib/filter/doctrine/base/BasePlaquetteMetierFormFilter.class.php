<?php

/**
 * PlaquetteMetier filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePlaquetteMetierFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'intitule_post'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nb_candidat'               => new sfWidgetFormFilterInput(),
      'rem_moy'                   => new sfWidgetFormFilterInput(),
      'rem_max'                   => new sfWidgetFormFilterInput(),
      'id_cand_max'               => new sfWidgetFormFilterInput(),
      'rem_min'                   => new sfWidgetFormFilterInput(),
      'id_cand_min'               => new sfWidgetFormFilterInput(),
      'secteur_pourcent'          => new sfWidgetFormFilterInput(),
      'formation_pourcent'        => new sfWidgetFormFilterInput(),
      'loc_pourcent'              => new sfWidgetFormFilterInput(),
      'age_moy'                   => new sfWidgetFormFilterInput(),
      'age_min'                   => new sfWidgetFormFilterInput(),
      'age_max'                   => new sfWidgetFormFilterInput(),
      'taux_reussite'             => new sfWidgetFormFilterInput(),
      'commentaire'               => new sfWidgetFormFilterInput(),
      'aff_intitule_post'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_nb_candidat'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_rem_moy'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_rem_max'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_age_cand_max'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_formation_cand_max'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_societe_prov_cand_max' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_rem_min'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_age_cand_min'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_formation_cand_min'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_societe_prov_cand_min' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_secteur_pourcent'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_formation_pourcent'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_loc_pourcent'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_age_moy'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_age_min'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_age_max'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aff_commentaire'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'utilisateur_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
      'saved'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'intitule_post'             => new sfValidatorPass(array('required' => false)),
      'nb_candidat'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rem_moy'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rem_max'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_cand_max'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rem_min'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_cand_min'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'secteur_pourcent'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'formation_pourcent'        => new sfValidatorPass(array('required' => false)),
      'loc_pourcent'              => new sfValidatorPass(array('required' => false)),
      'age_moy'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'age_min'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'age_max'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'taux_reussite'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'commentaire'               => new sfValidatorPass(array('required' => false)),
      'aff_intitule_post'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_nb_candidat'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_rem_moy'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_rem_max'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_age_cand_max'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_formation_cand_max'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_societe_prov_cand_max' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_rem_min'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_age_cand_min'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_formation_cand_min'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_societe_prov_cand_min' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_secteur_pourcent'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_formation_pourcent'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_loc_pourcent'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_age_moy'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_age_min'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_age_max'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aff_commentaire'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'utilisateur_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id')),
      'saved'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('plaquette_metier_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PlaquetteMetier';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'intitule_post'             => 'Text',
      'nb_candidat'               => 'Number',
      'rem_moy'                   => 'Number',
      'rem_max'                   => 'Number',
      'id_cand_max'               => 'Number',
      'rem_min'                   => 'Number',
      'id_cand_min'               => 'Number',
      'secteur_pourcent'          => 'Number',
      'formation_pourcent'        => 'Text',
      'loc_pourcent'              => 'Text',
      'age_moy'                   => 'Number',
      'age_min'                   => 'Number',
      'age_max'                   => 'Number',
      'taux_reussite'             => 'Number',
      'commentaire'               => 'Text',
      'aff_intitule_post'         => 'Boolean',
      'aff_nb_candidat'           => 'Boolean',
      'aff_rem_moy'               => 'Boolean',
      'aff_rem_max'               => 'Boolean',
      'aff_age_cand_max'          => 'Boolean',
      'aff_formation_cand_max'    => 'Boolean',
      'aff_societe_prov_cand_max' => 'Boolean',
      'aff_rem_min'               => 'Boolean',
      'aff_age_cand_min'          => 'Boolean',
      'aff_formation_cand_min'    => 'Boolean',
      'aff_societe_prov_cand_min' => 'Boolean',
      'aff_secteur_pourcent'      => 'Boolean',
      'aff_formation_pourcent'    => 'Boolean',
      'aff_loc_pourcent'          => 'Boolean',
      'aff_age_moy'               => 'Boolean',
      'aff_age_min'               => 'Boolean',
      'aff_age_max'               => 'Boolean',
      'aff_commentaire'           => 'Boolean',
      'utilisateur_id'            => 'ForeignKey',
      'saved'                     => 'Boolean',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
    );
  }
}

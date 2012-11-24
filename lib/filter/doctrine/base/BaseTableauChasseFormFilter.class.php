<?php

/**
 * TableauChasse filter form base class.
 *
 * @package    opsearch-app
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTableauChasseFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'contactepar'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contactele'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'commentairecontact'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rencontrepar'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rencontrele'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'commentairerencontre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'commentaire'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'criteres_specifiques' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ctrl_statut_id'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'shortliste'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coutextesociete'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coufondsociete'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coutextecandidat'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'coufondcandidat'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'contactepar'          => new sfValidatorPass(array('required' => false)),
      'contactele'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'commentairecontact'   => new sfValidatorPass(array('required' => false)),
      'rencontrepar'         => new sfValidatorPass(array('required' => false)),
      'rencontrele'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'commentairerencontre' => new sfValidatorPass(array('required' => false)),
      'commentaire'          => new sfValidatorPass(array('required' => false)),
      'criteres_specifiques' => new sfValidatorPass(array('required' => false)),
      'ctrl_statut_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'shortliste'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'coutextesociete'      => new sfValidatorPass(array('required' => false)),
      'coufondsociete'       => new sfValidatorPass(array('required' => false)),
      'coutextecandidat'     => new sfValidatorPass(array('required' => false)),
      'coufondcandidat'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tableau_chasse_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TableauChasse';
  }

  public function getFields()
  {
    return array(
      'mission_id'           => 'Number',
      'candidat_id'          => 'Number',
      'contactepar'          => 'Text',
      'contactele'           => 'Date',
      'commentairecontact'   => 'Text',
      'rencontrepar'         => 'Text',
      'rencontrele'          => 'Date',
      'commentairerencontre' => 'Text',
      'commentaire'          => 'Text',
      'criteres_specifiques' => 'Text',
      'ctrl_statut_id'       => 'Number',
      'shortliste'           => 'Number',
      'coutextesociete'      => 'Text',
      'coufondsociete'       => 'Text',
      'coutextecandidat'     => 'Text',
      'coufondcandidat'      => 'Text',
    );
  }
}

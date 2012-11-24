<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Formation', 'doctrine');

/**
 * BaseFormation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $candidat_id
 * @property string $niveauformation
 * @property string $ecole
 * @property string $ville
 * @property string $pays
 * @property date $datediplome
 * @property string $commentaire
 * @property Candidat $Candidat
 * @property Doctrine_Collection $MotsFormation
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method integer             getCandidatId()      Returns the current record's "candidat_id" value
 * @method string              getNiveauformation() Returns the current record's "niveauformation" value
 * @method string              getEcole()           Returns the current record's "ecole" value
 * @method string              getVille()           Returns the current record's "ville" value
 * @method string              getPays()            Returns the current record's "pays" value
 * @method date                getDatediplome()     Returns the current record's "datediplome" value
 * @method string              getCommentaire()     Returns the current record's "commentaire" value
 * @method Candidat            getCandidat()        Returns the current record's "Candidat" value
 * @method Doctrine_Collection getMotsFormation()   Returns the current record's "MotsFormation" collection
 * @method Formation           setId()              Sets the current record's "id" value
 * @method Formation           setCandidatId()      Sets the current record's "candidat_id" value
 * @method Formation           setNiveauformation() Sets the current record's "niveauformation" value
 * @method Formation           setEcole()           Sets the current record's "ecole" value
 * @method Formation           setVille()           Sets the current record's "ville" value
 * @method Formation           setPays()            Sets the current record's "pays" value
 * @method Formation           setDatediplome()     Sets the current record's "datediplome" value
 * @method Formation           setCommentaire()     Sets the current record's "commentaire" value
 * @method Formation           setCandidat()        Sets the current record's "Candidat" value
 * @method Formation           setMotsFormation()   Sets the current record's "MotsFormation" collection
 * 
 * @package    opsearch-app
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFormation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formation');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('candidat_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('niveauformation', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('ecole', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('ville', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('pays', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('datediplome', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('commentaire', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Candidat', array(
             'local' => 'candidat_id',
             'foreign' => 'id'));

        $this->hasMany('MotsFormation', array(
             'local' => 'id',
             'foreign' => 'formation_id'));
    }
}
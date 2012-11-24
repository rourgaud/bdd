<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('FeuilleCheck', 'doctrine');

/**
 * BaseFeuilleCheck
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $critere
 * @property string $valeur
 * @property integer $ordre
 * @property integer $mission_id
 * @property Mission $Mission
 * 
 * @method integer      getId()         Returns the current record's "id" value
 * @method string       getCritere()    Returns the current record's "critere" value
 * @method string       getValeur()     Returns the current record's "valeur" value
 * @method integer      getOrdre()      Returns the current record's "ordre" value
 * @method integer      getMissionId()  Returns the current record's "mission_id" value
 * @method Mission      getMission()    Returns the current record's "Mission" value
 * @method FeuilleCheck setId()         Sets the current record's "id" value
 * @method FeuilleCheck setCritere()    Sets the current record's "critere" value
 * @method FeuilleCheck setValeur()     Sets the current record's "valeur" value
 * @method FeuilleCheck setOrdre()      Sets the current record's "ordre" value
 * @method FeuilleCheck setMissionId()  Sets the current record's "mission_id" value
 * @method FeuilleCheck setMission()    Sets the current record's "Mission" value
 * 
 * @package    opsearch-app
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFeuilleCheck extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('feuille_check');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('critere', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('valeur', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('ordre', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('mission_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Mission', array(
             'local' => 'mission_id',
             'foreign' => 'id'));
    }
}
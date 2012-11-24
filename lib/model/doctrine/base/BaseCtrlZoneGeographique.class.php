<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CtrlZoneGeographique', 'doctrine');

/**
 * BaseCtrlZoneGeographique
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $zonegeographique
 * 
 * @method string               getZonegeographique() Returns the current record's "zonegeographique" value
 * @method CtrlZoneGeographique setZonegeographique() Sets the current record's "zonegeographique" value
 * 
 * @package    opsearch-app
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCtrlZoneGeographique extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ctrl_zone_geographique');
        $this->hasColumn('zonegeographique', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}
<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CtrlSource', 'doctrine');

/**
 * BaseCtrlSource
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $source
 * 
 * @method string     getSource() Returns the current record's "source" value
 * @method CtrlSource setSource() Sets the current record's "source" value
 * 
 * @package    opsearch-app
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCtrlSource extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ctrl_source');
        $this->hasColumn('source', 'string', 255, array(
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
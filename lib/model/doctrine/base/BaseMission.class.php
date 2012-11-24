<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Mission', 'doctrine');

/**
 * BaseMission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $client
 * @property string $intituleposte
 * @property string $secteur
 * @property string $zonegeographique
 * @property string $fonction
 * @property string $niveauformation
 * @property float $remunerationmin
 * @property float $remunerationmax
 * @property integer $agemin
 * @property integer $agemax
 * @property integer $experiencemin
 * @property integer $experiencemax
 * @property date $datedebut
 * @property date $datefin
 * @property integer $nbcandidats
 * @property string $commentaire
 * @property integer $statut_mission_id
 * @property Doctrine_Collection $AffecteMission
 * @property Doctrine_Collection $CritereLibre
 * @property Doctrine_Collection $FeuilleCheck
 * @property Doctrine_Collection $TableauChasse
 * @property Doctrine_Collection $ReportingMissions
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method string              getClient()            Returns the current record's "client" value
 * @method string              getIntituleposte()     Returns the current record's "intituleposte" value
 * @method string              getSecteur()           Returns the current record's "secteur" value
 * @method string              getZonegeographique()  Returns the current record's "zonegeographique" value
 * @method string              getFonction()          Returns the current record's "fonction" value
 * @method string              getNiveauformation()   Returns the current record's "niveauformation" value
 * @method float               getRemunerationmin()   Returns the current record's "remunerationmin" value
 * @method float               getRemunerationmax()   Returns the current record's "remunerationmax" value
 * @method integer             getAgemin()            Returns the current record's "agemin" value
 * @method integer             getAgemax()            Returns the current record's "agemax" value
 * @method integer             getExperiencemin()     Returns the current record's "experiencemin" value
 * @method integer             getExperiencemax()     Returns the current record's "experiencemax" value
 * @method date                getDatedebut()         Returns the current record's "datedebut" value
 * @method date                getDatefin()           Returns the current record's "datefin" value
 * @method integer             getNbcandidats()       Returns the current record's "nbcandidats" value
 * @method string              getCommentaire()       Returns the current record's "commentaire" value
 * @method integer             getStatutMissionId()   Returns the current record's "statut_mission_id" value
 * @method Doctrine_Collection getAffecteMission()    Returns the current record's "AffecteMission" collection
 * @method Doctrine_Collection getCritereLibre()      Returns the current record's "CritereLibre" collection
 * @method Doctrine_Collection getFeuilleCheck()      Returns the current record's "FeuilleCheck" collection
 * @method Doctrine_Collection getTableauChasse()     Returns the current record's "TableauChasse" collection
 * @method Doctrine_Collection getReportingMissions() Returns the current record's "ReportingMissions" collection
 * @method Mission             setId()                Sets the current record's "id" value
 * @method Mission             setClient()            Sets the current record's "client" value
 * @method Mission             setIntituleposte()     Sets the current record's "intituleposte" value
 * @method Mission             setSecteur()           Sets the current record's "secteur" value
 * @method Mission             setZonegeographique()  Sets the current record's "zonegeographique" value
 * @method Mission             setFonction()          Sets the current record's "fonction" value
 * @method Mission             setNiveauformation()   Sets the current record's "niveauformation" value
 * @method Mission             setRemunerationmin()   Sets the current record's "remunerationmin" value
 * @method Mission             setRemunerationmax()   Sets the current record's "remunerationmax" value
 * @method Mission             setAgemin()            Sets the current record's "agemin" value
 * @method Mission             setAgemax()            Sets the current record's "agemax" value
 * @method Mission             setExperiencemin()     Sets the current record's "experiencemin" value
 * @method Mission             setExperiencemax()     Sets the current record's "experiencemax" value
 * @method Mission             setDatedebut()         Sets the current record's "datedebut" value
 * @method Mission             setDatefin()           Sets the current record's "datefin" value
 * @method Mission             setNbcandidats()       Sets the current record's "nbcandidats" value
 * @method Mission             setCommentaire()       Sets the current record's "commentaire" value
 * @method Mission             setStatutMissionId()   Sets the current record's "statut_mission_id" value
 * @method Mission             setAffecteMission()    Sets the current record's "AffecteMission" collection
 * @method Mission             setCritereLibre()      Sets the current record's "CritereLibre" collection
 * @method Mission             setFeuilleCheck()      Sets the current record's "FeuilleCheck" collection
 * @method Mission             setTableauChasse()     Sets the current record's "TableauChasse" collection
 * @method Mission             setReportingMissions() Sets the current record's "ReportingMissions" collection
 * 
 * @package    opsearch-app
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mission');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('client', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('intituleposte', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('secteur', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('zonegeographique', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('fonction', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
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
        $this->hasColumn('remunerationmin', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('remunerationmax', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('agemin', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('agemax', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('experiencemin', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('experiencemax', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('datedebut', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('datefin', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('nbcandidats', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('commentaire', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('statut_mission_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('AffecteMission', array(
             'local' => 'id',
             'foreign' => 'mission_id'));

        $this->hasMany('CritereLibre', array(
             'local' => 'id',
             'foreign' => 'mission_id'));

        $this->hasMany('FeuilleCheck', array(
             'local' => 'id',
             'foreign' => 'mission_id'));

        $this->hasMany('TableauChasse', array(
             'local' => 'id',
             'foreign' => 'mission_id'));

        $this->hasMany('ReportingMission as ReportingMissions', array(
             'local' => 'id',
             'foreign' => 'mission_id'));
    }
}
<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tache', 'doctrine');

/**
 * BaseTache
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $titre
 * @property string $commentaire
 * @property date $affecte_le
 * @property integer $affecte_a_id
 * @property integer $affecte_par_id
 * @property Utilisateur $Utilisateur
 * @property Utilisateur $Utilisateur_2
 * 
 * @method integer     getId()             Returns the current record's "id" value
 * @method string      getTitre()          Returns the current record's "titre" value
 * @method string      getCommentaire()    Returns the current record's "commentaire" value
 * @method date        getAffecteLe()      Returns the current record's "affecte_le" value
 * @method integer     getAffecteAId()     Returns the current record's "affecte_a_id" value
 * @method integer     getAffecteParId()   Returns the current record's "affecte_par_id" value
 * @method Utilisateur getUtilisateur()    Returns the current record's "Utilisateur" value
 * @method Utilisateur getUtilisateur2()   Returns the current record's "Utilisateur_2" value
 * @method Tache       setId()             Sets the current record's "id" value
 * @method Tache       setTitre()          Sets the current record's "titre" value
 * @method Tache       setCommentaire()    Sets the current record's "commentaire" value
 * @method Tache       setAffecteLe()      Sets the current record's "affecte_le" value
 * @method Tache       setAffecteAId()     Sets the current record's "affecte_a_id" value
 * @method Tache       setAffecteParId()   Sets the current record's "affecte_par_id" value
 * @method Tache       setUtilisateur()    Sets the current record's "Utilisateur" value
 * @method Tache       setUtilisateur2()   Sets the current record's "Utilisateur_2" value
 * 
 * @package    opsearch-app
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTache extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tache');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('titre', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
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
        $this->hasColumn('affecte_le', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('affecte_a_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('affecte_par_id', 'integer', 4, array(
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
        $this->hasOne('Utilisateur', array(
             'local' => 'affecte_a_id',
             'foreign' => 'id'));

        $this->hasOne('Utilisateur as Utilisateur_2', array(
             'local' => 'affecte_par_id',
             'foreign' => 'id'));
    }
}
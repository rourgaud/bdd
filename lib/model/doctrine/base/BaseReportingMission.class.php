<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ReportingMission', 'doctrine');

/**
 * BaseReportingMission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $mission_id
 * @property integer $nb_candidat
 * @property integer $nb_societe
 * @property integer $rem_moy
 * @property integer $rem_max
 * @property integer $id_cand_max
 * @property integer $rem_min
 * @property integer $id_cand_min
 * @property clob $formation_pourcent
 * @property clob $age_graph
 * @property clob $secteur_pourcent
 * @property clob $loc_pourcent
 * @property clob $sexe_pourcent
 * @property clob $inoutbu_pourcent
 * @property integer $mediane_salariale
 * @property clob $rap_exp_rem
 * @property clob $critere_spe
 * @property boolean $aff_mission_id
 * @property boolean $aff_nb_candidat
 * @property boolean $aff_nb_societe
 * @property boolean $aff_rem_moy
 * @property boolean $aff_rem_max
 * @property boolean $aff_age_cand_max
 * @property boolean $aff_formation_cand_max
 * @property boolean $aff_societe_prov_cand_max
 * @property boolean $aff_rem_min
 * @property boolean $aff_age_cand_min
 * @property boolean $aff_formation_cand_min
 * @property boolean $aff_societe_prov_cand_min
 * @property boolean $aff_formation_pourcent
 * @property boolean $aff_age_graph
 * @property boolean $aff_secteur_pourcent
 * @property boolean $aff_loc_pourcent
 * @property boolean $aff_sexe
 * @property boolean $aff_inoutbu_pourcent
 * @property boolean $aff_mediane_salariale
 * @property boolean $aff_rap_exp_rem
 * @property boolean $aff_critere_spe
 * @property integer $utilisateur_id
 * @property boolean $saved
 * @property Mission $Mission
 * 
 * @method integer          getMissionId()                 Returns the current record's "mission_id" value
 * @method integer          getNbCandidat()                Returns the current record's "nb_candidat" value
 * @method integer          getNbSociete()                 Returns the current record's "nb_societe" value
 * @method integer          getRemMoy()                    Returns the current record's "rem_moy" value
 * @method integer          getRemMax()                    Returns the current record's "rem_max" value
 * @method integer          getIdCandMax()                 Returns the current record's "id_cand_max" value
 * @method integer          getRemMin()                    Returns the current record's "rem_min" value
 * @method integer          getIdCandMin()                 Returns the current record's "id_cand_min" value
 * @method clob             getFormationPourcent()         Returns the current record's "formation_pourcent" value
 * @method clob             getAgeGraph()                  Returns the current record's "age_graph" value
 * @method clob             getSecteurPourcent()           Returns the current record's "secteur_pourcent" value
 * @method clob             getLocPourcent()               Returns the current record's "loc_pourcent" value
 * @method clob             getSexePourcent()              Returns the current record's "sexe_pourcent" value
 * @method clob             getInoutbuPourcent()           Returns the current record's "inoutbu_pourcent" value
 * @method integer          getMedianeSalariale()          Returns the current record's "mediane_salariale" value
 * @method clob             getRapExpRem()                 Returns the current record's "rap_exp_rem" value
 * @method clob             getCritereSpe()                Returns the current record's "critere_spe" value
 * @method boolean          getAffMissionId()              Returns the current record's "aff_mission_id" value
 * @method boolean          getAffNbCandidat()             Returns the current record's "aff_nb_candidat" value
 * @method boolean          getAffNbSociete()              Returns the current record's "aff_nb_societe" value
 * @method boolean          getAffRemMoy()                 Returns the current record's "aff_rem_moy" value
 * @method boolean          getAffRemMax()                 Returns the current record's "aff_rem_max" value
 * @method boolean          getAffAgeCandMax()             Returns the current record's "aff_age_cand_max" value
 * @method boolean          getAffFormationCandMax()       Returns the current record's "aff_formation_cand_max" value
 * @method boolean          getAffSocieteProvCandMax()     Returns the current record's "aff_societe_prov_cand_max" value
 * @method boolean          getAffRemMin()                 Returns the current record's "aff_rem_min" value
 * @method boolean          getAffAgeCandMin()             Returns the current record's "aff_age_cand_min" value
 * @method boolean          getAffFormationCandMin()       Returns the current record's "aff_formation_cand_min" value
 * @method boolean          getAffSocieteProvCandMin()     Returns the current record's "aff_societe_prov_cand_min" value
 * @method boolean          getAffFormationPourcent()      Returns the current record's "aff_formation_pourcent" value
 * @method boolean          getAffAgeGraph()               Returns the current record's "aff_age_graph" value
 * @method boolean          getAffSecteurPourcent()        Returns the current record's "aff_secteur_pourcent" value
 * @method boolean          getAffLocPourcent()            Returns the current record's "aff_loc_pourcent" value
 * @method boolean          getAffSexe()                   Returns the current record's "aff_sexe" value
 * @method boolean          getAffInoutbuPourcent()        Returns the current record's "aff_inoutbu_pourcent" value
 * @method boolean          getAffMedianeSalariale()       Returns the current record's "aff_mediane_salariale" value
 * @method boolean          getAffRapExpRem()              Returns the current record's "aff_rap_exp_rem" value
 * @method boolean          getAffCritereSpe()             Returns the current record's "aff_critere_spe" value
 * @method integer          getUtilisateurId()             Returns the current record's "utilisateur_id" value
 * @method boolean          getSaved()                     Returns the current record's "saved" value
 * @method Mission          getMission()                   Returns the current record's "Mission" value
 * @method ReportingMission setMissionId()                 Sets the current record's "mission_id" value
 * @method ReportingMission setNbCandidat()                Sets the current record's "nb_candidat" value
 * @method ReportingMission setNbSociete()                 Sets the current record's "nb_societe" value
 * @method ReportingMission setRemMoy()                    Sets the current record's "rem_moy" value
 * @method ReportingMission setRemMax()                    Sets the current record's "rem_max" value
 * @method ReportingMission setIdCandMax()                 Sets the current record's "id_cand_max" value
 * @method ReportingMission setRemMin()                    Sets the current record's "rem_min" value
 * @method ReportingMission setIdCandMin()                 Sets the current record's "id_cand_min" value
 * @method ReportingMission setFormationPourcent()         Sets the current record's "formation_pourcent" value
 * @method ReportingMission setAgeGraph()                  Sets the current record's "age_graph" value
 * @method ReportingMission setSecteurPourcent()           Sets the current record's "secteur_pourcent" value
 * @method ReportingMission setLocPourcent()               Sets the current record's "loc_pourcent" value
 * @method ReportingMission setSexePourcent()              Sets the current record's "sexe_pourcent" value
 * @method ReportingMission setInoutbuPourcent()           Sets the current record's "inoutbu_pourcent" value
 * @method ReportingMission setMedianeSalariale()          Sets the current record's "mediane_salariale" value
 * @method ReportingMission setRapExpRem()                 Sets the current record's "rap_exp_rem" value
 * @method ReportingMission setCritereSpe()                Sets the current record's "critere_spe" value
 * @method ReportingMission setAffMissionId()              Sets the current record's "aff_mission_id" value
 * @method ReportingMission setAffNbCandidat()             Sets the current record's "aff_nb_candidat" value
 * @method ReportingMission setAffNbSociete()              Sets the current record's "aff_nb_societe" value
 * @method ReportingMission setAffRemMoy()                 Sets the current record's "aff_rem_moy" value
 * @method ReportingMission setAffRemMax()                 Sets the current record's "aff_rem_max" value
 * @method ReportingMission setAffAgeCandMax()             Sets the current record's "aff_age_cand_max" value
 * @method ReportingMission setAffFormationCandMax()       Sets the current record's "aff_formation_cand_max" value
 * @method ReportingMission setAffSocieteProvCandMax()     Sets the current record's "aff_societe_prov_cand_max" value
 * @method ReportingMission setAffRemMin()                 Sets the current record's "aff_rem_min" value
 * @method ReportingMission setAffAgeCandMin()             Sets the current record's "aff_age_cand_min" value
 * @method ReportingMission setAffFormationCandMin()       Sets the current record's "aff_formation_cand_min" value
 * @method ReportingMission setAffSocieteProvCandMin()     Sets the current record's "aff_societe_prov_cand_min" value
 * @method ReportingMission setAffFormationPourcent()      Sets the current record's "aff_formation_pourcent" value
 * @method ReportingMission setAffAgeGraph()               Sets the current record's "aff_age_graph" value
 * @method ReportingMission setAffSecteurPourcent()        Sets the current record's "aff_secteur_pourcent" value
 * @method ReportingMission setAffLocPourcent()            Sets the current record's "aff_loc_pourcent" value
 * @method ReportingMission setAffSexe()                   Sets the current record's "aff_sexe" value
 * @method ReportingMission setAffInoutbuPourcent()        Sets the current record's "aff_inoutbu_pourcent" value
 * @method ReportingMission setAffMedianeSalariale()       Sets the current record's "aff_mediane_salariale" value
 * @method ReportingMission setAffRapExpRem()              Sets the current record's "aff_rap_exp_rem" value
 * @method ReportingMission setAffCritereSpe()             Sets the current record's "aff_critere_spe" value
 * @method ReportingMission setUtilisateurId()             Sets the current record's "utilisateur_id" value
 * @method ReportingMission setSaved()                     Sets the current record's "saved" value
 * @method ReportingMission setMission()                   Sets the current record's "Mission" value
 * 
 * @package    opsearch-app
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseReportingMission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reporting_mission');
        $this->hasColumn('mission_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('nb_candidat', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('nb_societe', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('rem_moy', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('rem_max', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('id_cand_max', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('rem_min', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('id_cand_min', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('formation_pourcent', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('age_graph', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('secteur_pourcent', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('loc_pourcent', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('sexe_pourcent', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('inoutbu_pourcent', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('mediane_salariale', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('rap_exp_rem', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('critere_spe', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('aff_mission_id', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_nb_candidat', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_nb_societe', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_rem_moy', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_rem_max', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_age_cand_max', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_formation_cand_max', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_societe_prov_cand_max', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_rem_min', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_age_cand_min', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_formation_cand_min', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_societe_prov_cand_min', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_formation_pourcent', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_age_graph', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_secteur_pourcent', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_loc_pourcent', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_sexe', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_inoutbu_pourcent', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_mediane_salariale', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_rap_exp_rem', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('aff_critere_spe', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('utilisateur_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('saved', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Mission', array(
             'local' => 'mission_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
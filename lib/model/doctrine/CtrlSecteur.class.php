<?php

/**
 * CtrlSecteur
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    opsearch-app
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class CtrlSecteur extends BaseCtrlSecteur
{
    public function  __toString() {
        return $this->getSecteur();
    }

    public static function getAllSecteur() {
        $secteurs = Doctrine_Core::getTable('CtrlSecteur')->findAll();

        $a_secteurs = array();
        foreach($secteurs as $secteur) {
            $a_secteurs[$secteur->getSecteur()] = $secteur->getSecteur();
        }

        return $a_secteurs;
    }
}
